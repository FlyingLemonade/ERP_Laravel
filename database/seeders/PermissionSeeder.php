<?php

namespace Database\Seeders;


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
        $permissions = [
            [
                'name' => 'admin',
                'description' => 'Full system access',
            ],
            [
                'name' => 'sales',
                'description' => 'Sales module access',
            ],
            [
                'name' => 'warehouse',
                'description' => 'Inventory module access',
            ],
            [
                'name' => 'finance',
                'description' => 'Finance module access',
            ],
            [
                'name' => 'hr',
                'description' => 'Human Resources module access',
            ],
        ];

        foreach ($permissions as $permission) {
            DB::table('permissions')->updateOrInsert(
                ['name' => $permission['name']], // prevent duplicates
                [
                    'description' => $permission['description'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
