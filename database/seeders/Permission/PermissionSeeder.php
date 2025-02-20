<?php

namespace Database\Seeders\Permission;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!DB::table('permissions')->where('name', 'Quản lý chức vụ')->exists()) {
            DB::table('permissions')->insert([
                'name' => 'Quản lý chức vụ',
                'created_at' => now(),
            ]);
        }

        if (!DB::table('permissions')->where('name', 'Quản lý người dùng')->exists()) {
            DB::table('permissions')->insert([
                'name' => 'Quản lý người dùng',
                'created_at' => now(),
            ]);
        }

        if (!DB::table('permissions')->where('name', 'Quản lý sinh viên')->exists()) {
            DB::table('permissions')->insert([
                'name' => 'Quản lý sinh viên',
                'created_at' => now(),
            ]);
        }

        if (!DB::table('permissions')->where('name', 'Bản đồ')->exists()) {
            DB::table('permissions')->insert([
                'name' => 'Bản đồ VNUA',
                'created_at' => now(),
            ]);
        }

        if (!DB::table('permissions')->where('name', 'Quản lý bài viết')->exists()) {
            DB::table('permissions')->insert([
                'name' => 'Quản lý bài viết',
                'created_at' => now(),
            ]);
        }

        if (!DB::table('permissions')->where('name', 'Cán bộ quản lý')->exists()) {
            DB::table('permissions')->insert([
                'name' => 'Cán bộ quản lý',
                'created_at' => now(),
            ]);
        }

        if (!DB::table('permissions')->where('name', 'Quản lý tòa nhà')->exists()) {
            DB::table('permissions')->insert([
                'name' => 'Quản lý tòa nhà',
                'created_at' => now(),
            ]);
        }

        if (!DB::table('permissions')->where('name', 'Quản lý phòng')->exists()) {
            DB::table('permissions')->insert([
                'name' => 'Quản lý phòng',
                'created_at' => now(),
            ]);
        }

        if (!DB::table('permissions')->where('name', 'Quản lý cơ sở hạ tầng')->exists()) {
            DB::table('permissions')->insert([
                'name' => 'Quản lý cơ sở hạ tầng',
                'created_at' => now(),
            ]);
        }

        if (!DB::table('permissions')->where('name', 'Quản lý sinh viên trong ký túc xá')->exists()) {
            DB::table('permissions')->insert([
                'name' => 'Quản lý sinh viên trong ký túc xá',
                'created_at' => now(),
            ]);
        }

        if (!DB::table('permissions')->where('name', 'Quản lý nhà trọ')->exists()) {
            DB::table('permissions')->insert([
                'name' => 'Quản lý nhà trọ',
                'created_at' => now(),
            ]);
        }

        if (!DB::table('permissions')->where('name', 'Quản lý đơn đăng ký ký túc xá')->exists()) {
            DB::table('permissions')->insert([
                'name' => 'Quản lý đơn đăng ký ký túc xá',
                'created_at' => now(),
            ]);
        }

        if (!DB::table('permissions')->where('name', 'Quản lý cán bộ y tế')->exists()) {
            DB::table('permissions')->insert([
                'name' => 'Quản lý cán bộ y tế',
                'created_at' => now(),
            ]);
        }

        if (!DB::table('permissions')->where('name', 'Quản lý chuyên khoa')->exists()) {
            DB::table('permissions')->insert([
                'name' => 'Quản lý chuyên khoa',
                'created_at' => now(),
            ]);
        }

        if (!DB::table('permissions')->where('name', 'Yêu cầu tư vấn sức khoẻ')->exists()) {
            DB::table('permissions')->insert([
                'name' => 'Yêu cầu tư vấn sức khoẻ',
                'created_at' => now(),
            ]);
        }

        if (!DB::table('permissions')->where('name', 'Quản lý dịch vụ')->exists()) {
            DB::table('permissions')->insert([
                'name' => 'Quản lý dịch vụ',
                'created_at' => now(),
            ]);
        }

        if (!DB::table('permissions')->where('name', 'Quản lý danh mục dịch vụ')->exists()) {
            DB::table('permissions')->insert([
                'name' => 'Quản lý danh mục dịch vụ',
                'created_at' => now(),
            ]);
        }

    }
}
