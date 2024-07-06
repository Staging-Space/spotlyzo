<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'role' => 'admin',
            'first_name' => 'Administrator',
            'email' => 'admin@test.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
