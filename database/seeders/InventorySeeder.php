<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('inventories')->insert([
            [
                'name' => 'Laptop Dell XPS 13',
                'description' => '13-inch ultrabook with Intel i7 processor and 16GB RAM.',
                'quantity' => 15,
                'price_average' => 4500,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'iPhone 15 Pro',
                'description' => 'Apple smartphone with A17 chip and 256GB storage.',
                'quantity' => 25,
                'price_average' => 5200,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Samsung Galaxy S24',
                'description' => 'Android flagship smartphone with 512GB storage.',
                'quantity' => 20,
                'price_average' => 4800,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sony WH-1000XM5 Headphones',
                'description' => 'Noise-cancelling wireless over-ear headphones.',
                'quantity' => 30,
                'price_average' => 1500,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'iPad Air 5',
                'description' => '10.9-inch tablet with M1 chip and 64GB storage.',
                'quantity' => 18,
                'price_average' => 3000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Asus ROG Gaming Laptop',
                'description' => 'High-performance gaming laptop with RTX graphics.',
                'quantity' => 10,
                'price_average' => 6500,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Logitech MX Master 3 Mouse',
                'description' => 'Wireless ergonomic mouse for productivity.',
                'quantity' => 40,
                'price_average' => 450,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mechanical Keyboard RGB',
                'description' => 'Backlit mechanical keyboard with blue switches.',
                'quantity' => 35,
                'price_average' => 350,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Samsung 27" 4K Monitor',
                'description' => 'Ultra HD monitor with IPS panel.',
                'quantity' => 12,
                'price_average' => 1800,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'External SSD 1TB',
                'description' => 'Portable USB-C solid state drive.',
                'quantity' => 50,
                'price_average' => 600,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
