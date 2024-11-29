<?php

declare(strict_types=1);

namespace Database\Seeders\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!DB::table('users')->where('name', 'Admin')->exists()) {
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
}
