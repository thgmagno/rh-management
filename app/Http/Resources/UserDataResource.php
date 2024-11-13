<?php

namespace App\Http\Resources;

use Illuminate\Foundation\Http\FormRequest;

class UserDataResource extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:128',
            'email' => 'required|email|max:128|unique:users,email,' . auth()->user()->id,
        ];
    }
}
