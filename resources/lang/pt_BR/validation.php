<?php

return [
    'required' => 'O campo :attribute é obrigatório.',
    'email' => 'O campo :attribute deve ser um endereço de e-mail válido.',
    'min' => [
        'string' => 'O campo :attribute deve ter pelo menos :min caracteres.',
    ],
    'confirmed' => 'A confirmação do campo :attribute não confere.',
    'password' => [
        'min' => 'A senha deve ter pelo menos :min caracteres.',
        'mixed' => 'A senha deve conter pelo menos uma letra maiúscula e uma minúscula.',
        'numbers' => 'A senha deve conter pelo menos um número.',
        'symbols' => 'A senha deve conter pelo menos um símbolo.',
        'uncompromised' => 'A senha informada apareceu em um vazamento de dados. Por favor, escolha uma senha diferente.',
    ],
    'different' => 'A nova senha deve ser diferente da senha atual.',
    'unique' => 'O campo :attribute já está em uso.',
    
    // Atributos personalizados (opcional)
    'attributes' => [
        'email' => 'e-mail',
        'password' => 'senha',
        'password_confirmation' => 'confirmação de senha',
    ],
]; 