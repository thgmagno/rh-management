<?php

namespace Database\Seeders;

use DB;
use Hash;
use Illuminate\Database\Seeder;

class BaseSeeder extends Seeder
{
  public function run(): void
  {
    // Tabela de departamentos: RH
    DB::table('departments')->insert([
      'name' => 'Recursos Humanos',
      'created_at' => now(),
      'updated_at' => now(),
    ]);

    // Tabela de departamentos: Colaboradores
    DB::table('departments')->insert([
      'name' => 'Colaboradores',
      'created_at' => now(),
      'updated_at' => now(),
    ]);

    // Usuário: RH
    DB::table('users')->insert([
      'name' => 'Recursos Humanos',
      'email' => 'rh@email.com',
      'password' => Hash::make('123123'),
      'role' => 'rh',
      'permissions' => '["RH"]',
      'department_id' => 2,
      'created_at' => now(),
      'updated_at' => now(),
    ]);

    DB::table('user_details')->insert([
      'user_id' => 2,
      'address' => 'Rua dos Recursos Humanos, 123',
      'zip_code' => '12345-678',
      'city' => 'Curitiba',
      'phone' => '(41) 99999-9999',
      'salary' => 5000.00,
      'admission_date' => '2021-01-01',
      'created_at' => now(),
      'updated_at' => now(),
    ]);

    // Usuário: Colaborador
    DB::table('users')->insert([
      'name' => 'Colaborador',
      'email' => 'colaborador@email.com',
      'password' => Hash::make('123123'),
      'role' => 'user',
      'permissions' => '["User"]',
      'department_id' => 2,
      'created_at' => now(),
      'updated_at' => now(),
    ]);

    DB::table('user_details')->insert([
      'user_id' => 3,
      'address' => 'Rua do Colaborador, 123',
      'zip_code' => '12345-678',
      'city' => 'Rio de Janeiro',
      'phone' => '(21) 99999-9999',
      'salary' => 3000.00,
      'admission_date' => '2022-01-01',
      'created_at' => now(),
      'updated_at' => now(),
    ]);
  }
}

