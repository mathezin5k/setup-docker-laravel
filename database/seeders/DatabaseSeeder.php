<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
        public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin_User',
                'email' => 'admin@example.com',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
            ],
            [
                'name' => 'Operationa_User',
                'email' => 'operational@example.com',
                'password' => Hash::make('operational123'),
                'role' => 'operacional',
            ],
            [
                'name' => 'Commercial_User',
                'email' => 'commercial@example.com',
                'password' => Hash::make('comercial123'),
                'role' => 'comercial',
            ],
        ]);
    }
}
