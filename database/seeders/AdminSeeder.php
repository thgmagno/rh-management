<?php

namespace Database\Seeders;

use DB;
use Hash;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('departments')->insert([
            'name' => 'Administração',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'admin@email.com',
            'password' => Hash::make('123123'),
            'role' => 'admin',
            'permissions' => '["Admin"]',
            'department_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('user_details')->insert([
            'user_id' => 1,
            'address' => 'Rua do Administrador, 123',
            'zip_code' => '12345-678',
            'city' => 'São Paulo',
            'phone' => '(11) 99999-9999',
            'salary' => 8000.00,
            'admission_date' => '2020-01-01',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
