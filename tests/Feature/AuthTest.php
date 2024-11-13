<?php

use App\Models\Department;
use App\Models\User;

it('Display the login page it not logged in', function () {
    
    // Verifica no contexto do Fortify, se ao entrar na página inicial, vai ser redirecionado
    // para a página de login.
    $result = $this->get('/')->assertRedirect('/login');

    // Verificar se o resultado é 302 (redirecionamento)
    expect($result->status())->toBe(302);

    // Verifica se a rota de login é acessível com status 200
    expect($this->get('/login')->status())->toBe(200);

    // Verifica se a página de login contém um texto "Esqueceu a sua senha?"
    expect($this->get('/login')->content())->toContain('Esqueceu a sua senha?');

});

it('Display the recover password page correctly', function () {
    expect($this->get('/forgot-password')->status())->toBe(200);
    expect($this->get('/forgot-password')->content())->toContain('Voltar para o login');
});

it('test if an admin user can login with success', function () {

    // Arrange: Criar um usuário admin
    $adminUser = createAdminUser();

    // Act: Tentar fazer login com o usuário criado
    $result = $this->post('/login', [
        'email' => $adminUser->email,
        'password' => 'Aa123456',
    ]);

    // Assert: Verificar se o login foi feito com sucesso
    expect($result->status())->toBe(302);
    expect($result->assertRedirect('/home'));
});



/**
 * Utilitie functions
 */

function createAdminUser()
{
    return User::create([
        'department_id' => 1,
        'name' => 'Administrador',
        'email' => 'admin@rhmangnt.com',
        'password' => bcrypt('Aa123456'),
        'role' => 'admin',
        'permissions' => "['admin']",
    ]);
}