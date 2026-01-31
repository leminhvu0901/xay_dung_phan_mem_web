<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

//khai bao 
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void //du lieu mau 
    {
        User::insert([
            [
                'full_name' => 'admin',
                'email' => 'admin@gmail.com',
                'PASSWORD' => Hash::make('admin'),
                'role' => 'admin',
                'membership_level' => 'diamond',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'User1',
                'email' => 'User1@gmail.com',
                'PASSWORD' => Hash::make('User1'),
                'role' => 'customer',
                'membership_level' => 'silver',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'User2',
                'email' => 'User2@gmail.com',
                'PASSWORD' => Hash::make('User2'),
                'role' => 'customer',
                'membership_level' => 'silver',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
