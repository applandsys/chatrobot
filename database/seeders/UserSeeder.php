<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'Tarique Mosharraf',
                'email' => 'tariq@gmail.com',
                'password' => Hash::make('123456')
            ],
            [
                'name' => 'Nur Alam',
                'email' => 'nur@gmail.com',
                'password' => Hash::make('123456')
            ],
        ]);
    }
}
