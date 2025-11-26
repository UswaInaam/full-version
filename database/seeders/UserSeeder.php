<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'Uswa Inam',
                'email' => 'uswa@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Ali Khan',
                'email' => 'ali@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Sara Ahmed',
                'email' => 'sara@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Ahmed Raza',
                'email' => 'ahmed@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Fatima Noor',
                'email' => 'fatima@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Hassan Ali',
                'email' => 'hassan@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Ayesha Siddiqui',
                'email' => 'ayesha@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Bilal Shah',
                'email' => 'bilal@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Maria Khan',
                'email' => 'maria@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Omar Farooq',
                'email' => 'omar@example.com',
                'password' => Hash::make('password123'),
            ],
        ]);
    }
}
