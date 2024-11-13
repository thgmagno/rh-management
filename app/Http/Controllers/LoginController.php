<?php

namespace App\Http\Controllers;

use Hash;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        
        $adminEmail = 'admin@rhmangnt.com';
        $adminPassword = bcrypt('Aa123456');

        if ($email === $adminEmail && Hash::check($password, $adminPassword)) {
            return redirect('/');
        }

        return redirect('/login');
    }
}
