<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'cristoferg@prodooh.com',
            'password' => Hash::make('password123'), // Contraseña de ejemplo
        ]);
        // Usuario de ejemplo 2
        User::create([
            'name' => 'Test User',
            'email' => 'meilissamundo@prodooh.com',
            'password' => Hash::make('password123'), // Contraseña de ejemplo
        ]);
    }
}
