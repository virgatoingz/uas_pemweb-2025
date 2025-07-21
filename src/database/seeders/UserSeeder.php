<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Yohanes Inri',
            'email' => 'yohanes@example.com',
            'password' => Hash::make('password'),
            'peran' => 'Project Manager',
            'divisi' => 'IT Development',
        ]);

        User::create([
            'name' => 'Ananda Michael',
            'email' => 'ananda@example.com',
            'password' => Hash::make('password'),
            'peran' => 'Programmer',
            'divisi' => 'IT Development',
        ]);

        User::create([
            'name' => 'Virga Mulia',
            'email' => 'virga@example.com',
            'password' => Hash::make('password'),
            'peran' => 'Tester',
            'divisi' => 'Quality Assurance',
        ]);

        User::create([
            'name' => 'Salsabila Zahra',
            'email' => 'salsa@example.com',
            'password' => Hash::make('password'),
            'peran' => 'Designer',
            'divisi' => 'Creative Team',
        ]);

        User::create([
            'name' => 'Rizky Nurfalah',
            'email' => 'rizky@example.com',
            'password' => Hash::make('password'),
            'peran' => 'System Analyst',
            'divisi' => 'IT Planning',
        ]);

        User::create([
            'name' => 'Mira Putri',
            'email' => 'mira@example.com',
            'password' => Hash::make('password'),
            'peran' => 'Database Administrator',
            'divisi' => 'IT Support',
        ]);
    }
}
