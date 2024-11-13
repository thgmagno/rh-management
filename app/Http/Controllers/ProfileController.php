<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('user.profile');
    }

    public function updatePassword(Request $request)
    {
        // Form validation
        $request->validate([
            'current_password' => 'required|min:6|max:16',
            'new_password' => 'required|min:6|max:16|different:current_password',
            'new_password_confirmation' => 'required|same:new_password',
        ]);

        $user = auth()->user();

        // Match the current password
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with("error", "A senha atual não corresponde!");
        }

        // Update the new password
        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with("success", "Senha alterada com sucesso!");
    }

    public function updateData(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:128',
            'email' => 'required|email|max:128|unique:users,email,' . auth()->user()->id,
        ]);

        $user = auth()->user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return back()->with('success_change_data', 'Dados atualizados com sucesso!');
    }
}
