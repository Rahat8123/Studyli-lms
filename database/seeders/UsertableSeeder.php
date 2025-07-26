<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsertableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'username' => 'admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'status' => '1',
                'photo' => null,
                'phone' => '1234567890',
                'address' => 'Admin Address',
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Instructor User',
                'username' => 'instructor',
                'email' => 'instructor@example.com',
                'password' => Hash::make('password'),
                'role' => 'instructor',
                'status' => '1',
                'photo' => null,
                'phone' => '2345678901',
                'address' => 'Instructor Address',
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Demo User',
                'username' => 'user',
                'email' => 'user@example.com',
                'password' => Hash::make('password'),
                'role' => 'user',
                'status' => '1',
                'photo' => null,
                'phone' => '3456789012',
                'address' => 'User Address',
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
