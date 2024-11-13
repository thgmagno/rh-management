<?php

namespace App\Http\Resources;

use Illuminate\Foundation\Http\FormRequest;

class RhUserResource extends FormRequest
{
    public function rules(): array
    {
        if ($this->isMethod('PUT')) {
            return [
                'name' => 'required|string|min:1|max:255',
                'email' => 'required|email|unique:users,email,' . $this->id,
            ];
        }

        return [
            'name' => 'required|string|min:1|max:255',
            'email' => 'required|email|unique:users,email',
        ];
    }
}
