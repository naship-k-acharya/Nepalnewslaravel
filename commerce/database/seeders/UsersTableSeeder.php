<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'user_type' => 'buyer',
            'name' => 'John ',
            'email' => 'john1@example.com',
            'password' => bcrypt('password'),
            'status' => 'active',
        ]);
        User::create([
            'user_type' => 'seller',
            'name' => 'Doe',
            'email' => 'john12@example.com',
            'password' => bcrypt('password'),
            'status' => 'active',
        ]);
        User::create([
            'user_type' => 'admin',
            'name' => 'admin',
            'email' => 'john123@example.com',
            'password' => bcrypt('password'),
            'status' => 'active',
        ]);

    }
}
