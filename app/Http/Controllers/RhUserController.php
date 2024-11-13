<?php

namespace App\Http\Controllers;

use App\Http\Resources\RhUserResource;
use App\Models\Department;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class RhUserController extends Controller
{
    public function index()
    {
        $this->canAccess();

        $colaborators = User::where('role', 'rh')->get();

        return view('colaborators.rh-users-index', compact('colaborators'));
    }

    public function create()
    {
        $this->canAccess();

        return view('colaborators.rh-users-create');
    }
    public function store(RhUserResource $request)
    {
        $this->canAccess();

        $departmentId = Department::where('name', 'Recursos Humanos')->first()->id;

        if (!$departmentId) {
            return redirect()->route('rh-users.create')->with('error', 'Departamento de Recursos Humanos não encontrado.');
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'rh',
            'password' => Hash::make('123123'),
            'permissions' => '["RH"]',
            'department_id' => $departmentId,
        ]);

        return redirect()->route('rh-users.index')->with('success', 'Colaborador criado com sucesso.');
    }

    public function edit($id)
    {
        $this->canAccess();

        $rhUser = User::findOrFail($id);

        return view('colaborators.rh-users-edit', compact('rhUser'));
    }
    public function update(Request $request)
    {
        $this->canAccess();

        $rhUser = User::findOrFail($request->id);

        $rhUser->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('rh-users.index')->with('success', 'Colaborador atualizado com sucesso.');
    }

    public function destroyConfirm($id)
    {
        $this->canAccess();

        $rhUser = User::findOrFail($id);

        return view('colaborators.rh-users-destroy-confirm', compact('rhUser'));
    }
    public function destroy($id)
    {
        $this->canAccess();

        $rhUser = User::findOrFail($id);

        $rhUser->delete();

        return redirect()->route('rh-users.index')->with('success', 'Colaborador excluído com sucesso.');
    }

    public function canAccess()
    {
        Auth::user()->can('admin') ?: abort(403, 'Você não tem permissão para acessar esta página.');
    }
}
