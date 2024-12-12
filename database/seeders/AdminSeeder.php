<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'Administrador Principal',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'), // Contraseña encriptada
        ]);
    }
}
