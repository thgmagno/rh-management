<?php

namespace App\Http\Resources;

use Illuminate\Foundation\Http\FormRequest;

class UserPasswordResource extends FormRequest
{
    public function rules(): array
    {
        return [
            'current_password' => 'required|min:6|max:16',
            'new_password' => 'required|min:6|max:16|different:current_password',
            'new_password_confirmation' => 'required|same:new_password',
        ];
    }
}
