<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'customer_first_name' => 'John',
                'customer_last_name' => 'Doe',
                'customer_address' => '123 Elm St, Springfield, IL 62701',
                'customer_phone' => '555-1234',
                'customer_email' => 'john.doe@example.com',
            ],
            [
                'customer_first_name' => 'Jane',
                'customer_last_name' => 'Smith',
                'customer_address' => '456 Oak St, Chicago, IL 60601',
                'customer_phone' => '555-5678',
                'customer_email' => 'jane.smith@example.com',
            ],
            [
                'customer_first_name' => 'Robert',
                'customer_last_name' => 'Brown',
                'customer_address' => '789 Pine St, Naperville, IL 60563',
                'customer_phone' => '555-8765',
                'customer_email' => 'robert.brown@example.com',
            ],
            [
                'customer_first_name' => 'Emily',
                'customer_last_name' => 'Johnson',
                'customer_address' => '101 Maple St, Peoria, IL 61602',
                'customer_phone' => '555-4321',
                'customer_email' => 'emily.johnson@example.com',
            ],
            [
                'customer_first_name' => 'Michael',
                'customer_last_name' => 'Davis',
                'customer_address' => '202 Birch St, Rockford, IL 61101',
                'customer_phone' => '555-6543',
                'customer_email' => 'michael.davis@example.com',
            ],
        ]);
    }
}
