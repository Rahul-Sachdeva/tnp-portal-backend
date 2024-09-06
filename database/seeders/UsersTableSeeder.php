<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'John Doe', 'email' => 'john.doe@example.com', 'password' => Hash::make('password123'), 'role' => 'Admin'],
            ['name' => 'Jane Smith', 'email' => 'jane.smith@example.com', 'password' => Hash::make('password123'), 'role' => 'Core Member'],
            ['name' => 'Emily Johnson', 'email' => 'emily.johnson@example.com', 'password' => Hash::make('password123'), 'role' => 'Recruiter'],
            ['name' => 'Michael Brown', 'email' => 'michael.brown@example.com', 'password' => Hash::make('password123'), 'role' => 'Student'],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
