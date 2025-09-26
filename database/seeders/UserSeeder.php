<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\UserPreference;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name'     => 'Super Admin',
                'email'    => 'venchy.dev@gmail.com',
                'password' => '12qwaszx',
                'role'     => 'super_admin',
            ],
            [
                'name'     => 'Admin User',
                'email'    => 'admin@example.com',
                'password' => 'password123',
                'role'     => 'admin',
            ],
            [
                'name'     => 'Operator User',
                'email'    => 'operator@example.com',
                'password' => 'password123',
                'role'     => 'operator',
            ],
        ];

        foreach ($users as $userData) {
            $user = User::create([
                'name'     => $userData['name'],
                'email'    => $userData['email'],
                'password' => Hash::make($userData['password']),
            ]);

            UserPreference::create([
                'user_id' => $user->id,
                'role'    => $userData['role'],
            ]);
        }
    }
}
