<?php

namespace Database\Seeders\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'name' => 'Admin',
            'created_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'role_id' => 1,
            'email' => 'nguyenphuongnam12a9@gmail.com',
            'phone_number' => '0983562383',
            'user_name' => 'admin',
            'password' => bcrypt('123456aA@'),
        ]);
    }
}
