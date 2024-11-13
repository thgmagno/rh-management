<?php

namespace App\Http\Controllers;

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

        return view('department.create-department');
    }

    public function store(Request $request)
    {
        $this->canAccess();

        $request->validate([
            'name' => 'required|string|min:1|max:255|unique:departments,name'
        ], [
            'name.required' => 'O campo nome do departamento é obrigatório.',
            'name.unique' => 'O nome do departamento já está em uso.',
        ]);

        Department::create([
            'name' => $request->name,
        ]);

        return redirect()->route('departments')->with('success', 'Departamento criado com sucesso!');
    }

    public function edit(Request $request)
    {
        $this->canAccess();

        $department = Department::where('id', $request->id)->first();

        return view('department.edit-department', compact('department'));
    }

    public function update(Request $request)
    {
        $this->canAccess();

        $request->validate([
            'name' => 'required|string|min:1|max:255|unique:departments,name'
        ], [
            'name.required' => 'O campo nome do departamento é obrigatório.',
            'name.unique' => 'O nome do departamento já está em uso.',
        ]);

        Department::where('id', $request->id)->update([
            'name' => $request->name,
        ]);

        return redirect()->route('departments')->with('success', 'Departamento atualizado com sucesso!');
    }

    public function destroy(Request $request)
    {
        $this->canAccess();

        Department::where('id', $request->id)->delete();

        return redirect()->route('departments')->with('success', 'Departamento deletado com sucesso!');
    }

    private function canAccess()
    {
        Auth::user()->can('admin') ?: abort(403, 'Você não tem permissão para acessar esta página.');
    }


}
