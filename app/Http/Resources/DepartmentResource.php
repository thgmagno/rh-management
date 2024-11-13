<?php

namespace App\Http\Resources;

use Illuminate\Foundation\Http\FormRequest;

class DepartmentResource extends FormRequest
{
    public function rules(): array
    {
        if ($this->isMethod('PUT')) {
            return [
                'name' => [
                    'required',
                    'string',
                    'min:1',
                    'max:255',
                    'unique:departments,name,' . $this->route('department')->id
                ]
            ];
        }

        return [
            'name' => 'required|string|min:1|max:255|unique:departments,name'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O campo nome do departamento é obrigatório.',
            'name.unique' => 'O nome do departamento já está em uso.',
        ];
    }
}
