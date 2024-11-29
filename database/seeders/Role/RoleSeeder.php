<?php

declare(strict_types=1);

namespace Database\Seeders\Role;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!DB::table('roles')->where('name', 'Admin')->exists()) {
            DB::table('roles')->insert([
                'name' => 'Admin',
                'created_at' => now(),
            ]);
        }

        if (!DB::table('roles')->where('name', 'Sức khỏe')->exists()) {
            DB::table('roles')->insert([
                'name' => 'Sức khỏe',
                'created_at' => now(),
            ]);
        }

        if (!DB::table('roles')->where('name', 'Dịch vụ')->exists()) {
            DB::table('roles')->insert([
                'name' => 'Dịch vụ',
                'created_at' => now(),
            ]);
        }

        if (!DB::table('roles')->where('name', 'Ký túc xá và trọ')->exists()) {
            DB::table('roles')->insert([
                'name' => 'Ký túc xá và trọ',
                'created_at' => now(),
            ]);
        }
    }
}
