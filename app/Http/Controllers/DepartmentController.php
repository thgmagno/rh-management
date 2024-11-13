<?php

namespace App\Http\Controllers;

use App\Http\Resources\DepartmentResource;
use App\Models\Department;
use Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    use HasFactory;

    public function index()
    {
        $this->canAccess();

        $departments = Department::all();

        return view('department.departments', compact('departments'));
    }

    public function create()
    {
        $this->canAccess();

        return view('department.department-create');
    }

    public function store(DepartmentResource $request)
    {
        $this->canAccess();

        Department::create([
            'name' => $request->name,
        ]);

        return redirect()->route('departments')->with('success', 'Departamento criado com sucesso!');
    }

    public function edit($id)
    {
        $this->canAccess();

        if (intval($id) === 1) {
            return redirect()->route('departments');
        }

        $department = Department::findOrFail($id);

        return view('department.department-edit', compact('department'));
    }

    public function update(DepartmentResource $request)
    {
        $this->canAccess();

        if (intval($request->id) === 1) {
            return redirect()->route('departments');
        }

        Department::where('id', $request->id)->update([
            'name' => $request->name,
        ]);

        return redirect()->route('departments')->with('success', 'Departamento atualizado com sucesso!');
    }

    public function destroyConfirm(Request $request)
    {
        $this->canAccess();

        if (intval($request->id) === 1) {
            return redirect()->route('departments');
        }

        $department = Department::findOrFail($request->id);

        return view('department.department-destroy-confirm', compact('department'));
    }

    public function destroy(Request $request)
    {
        $this->canAccess();

        if (intval($request->id) === 1) {
            return redirect()->route('departments');
        }

        Department::findOrFail($request->id)->delete();

        return redirect()->route('departments')->with('success', 'Departamento deletado com sucesso!');
    }

    private function canAccess()
    {
        Auth::user()->can('admin') ?: abort(403, 'Você não tem permissão para acessar esta página.');
    }


}
