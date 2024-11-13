<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;

class UserController extends Controller
{
    public function index()
    {
        $this->canAccess();

        $users = User::all();

        return view('user.users', compact('users'));
    }

    public function create() 
    {
        $this->canAccess();
    }
    public function store() 
    {
        $this->canAccess();
    }

    public function edit() 
    {
        $this->canAccess();
    }
    public function update() 
    {
        $this->canAccess();
    }

    public function destroyConfirm() 
    {
        $this->canAccess();
    }
    public function destroy() 
    {
        $this->canAccess();
    }

    public function canAccess()
    {
        Auth::user()->can('admin') || Auth::user()->can('rh') ?: abort(403, 'Você não tem permissão para acessar esta página.');
    }
}
