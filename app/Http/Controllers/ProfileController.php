<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserDataResource;
use App\Http\Resources\UserPasswordResource;
use Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('user.profile');
    }

    public function updatePassword(UserPasswordResource $request)
    {
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

    public function updateData(UserDataResource $request)
    {
        $user = auth()->user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return back()->with('success_change_data', 'Dados atualizados com sucesso!');
    }
}
