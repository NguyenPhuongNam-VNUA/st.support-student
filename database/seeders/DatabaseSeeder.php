<?php

declare(strict_types=1);

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            Role\RoleSeeder::class,
            User\UserSeeder::class,
            Permission\PermissionSeeder::class,
            PermissionRole\PermissionRoleSeeder::class,
        ]);
    }
}
