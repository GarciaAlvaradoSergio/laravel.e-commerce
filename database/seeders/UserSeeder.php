<?php

namespace Database\Seeders;

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
        DB::table('users')->insert(
            [
                'name' => 'Administrator',
                'username' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('admin'),
                'role' => 'admin',
                'status' => 'active',
            ],
            [
                'name' => 'Vendor',
                'username' => 'vendor',
                'email' => 'vendor@vendor.com',
                'password' => bcrypt('vendor'),
                'role' => 'vendor',
                'status' => 'active',
            ],
            [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@user.com',
                'password' => bcrypt('user'),
                'role' => 'user',
                'status' => 'active',
            ]
        );
    }
}
