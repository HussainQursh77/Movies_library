<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Seed the users table with three users.
     *
     * @return void
     */
    public function run()
    {
        // Array of user data
        $users = [
            [
                'name' => 'ali mohamed',
                'email' => 'ali@gmail.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'ahmad ahmad',
                'email' => 'ahmad@gmail.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'hussain hussain',
                'email' => 'hussain@gmail.com',
                'password' => Hash::make('password123'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
