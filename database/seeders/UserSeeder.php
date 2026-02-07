<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Get all permission IDs
        $permissions = DB::table('permissions')->pluck('id', 'name');

        $users = [
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => 'password',
                'permission' => 'admin',
            ],
            [
                'name' => 'HR User',
                'email' => 'hr@example.com',
                'password' => 'password',
                'permission' => 'hr',
            ],
            [
                'name' => 'Warehouse User',
                'email' => 'warehouse@example.com',
                'password' => 'password',
                'permission' => 'warehouse',
            ],
            [
                'name' => 'Finance User',
                'email' => 'finance@example.com',
                'password' => 'password',
                'permission' => 'finance',
            ],
            [
                'name' => 'Sales User',
                'email' => 'sales@example.com',
                'password' => 'password',
                'permission' => 'sales',
            ],
        ];

        foreach ($users as $user) {
            DB::table('users')->updateOrInsert(
                [
                    'name' => $user['name'],
                    'email' => $user['email'],
                    'password' => Hash::make($user['password']),
                    'permission_id' => $permissions[$user['permission']],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
