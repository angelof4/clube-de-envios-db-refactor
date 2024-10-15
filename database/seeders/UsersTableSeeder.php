<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Cria um usuário padrão
        User::create([
            'name' => 'user', // Nome do usuário
            'username' => 'user', // Nome de usuário (login)
            'password' => Hash::make('user'), // Senha (hash)
        ]);
    }
}
