<?php

namespace Database\Seeders\PermissionRole;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!DB::table('role_permission')->where('role_id', '1')->exists()) {
            DB::table('role_permission')->insert([
                'role_id' => '1',
                'permission_id' => '1',
                'created_at' => now(),
            ]);
        }

        if (!DB::table('role_permission')->where('role_id', '2')->exists()) {
            DB::table('role_permission')->insert([
                'role_id' => '1',
                'permission_id' => '2',
                'created_at' => now(),
            ]);
        }

    }
}
