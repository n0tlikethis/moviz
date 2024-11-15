<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Fetch some existing customer IDs from the 'customers' table
        $customerIds = DB::table('customers')->pluck('customer_id');

        // If no customers exist, don't seed any accounts
        if ($customerIds->isEmpty()) {
            return;
        }

        DB::table('accounts')->insert([
            [
                'customer_id' => $customerIds[0],
                'account_name' => 'John Doe Main Account',
                'account_details' =>
                    'Standard account for John Doe, includes rental and purchase options.',
            ],
            [
                'customer_id' => $customerIds[1],
                'account_name' => 'Jane Smith VIP Account',
                'account_details' =>
                    'VIP account for Jane Smith, includes premium discounts on rentals.',
            ],
            [
                'customer_id' => $customerIds[2],
                'account_name' => 'Robert Brown General Account',
                'account_details' =>
                    'General account for Robert Brown, with access to standard rental prices.',
            ],
            [
                'customer_id' => $customerIds[3],
                'account_name' => 'Emily Johnson Rental Account',
                'account_details' =>
                    'Rental-only account for Emily Johnson, access to rental inventory only.',
            ],
            [
                'customer_id' => $customerIds[4],
                'account_name' => 'Michael Davis Premium Account',
                'account_details' =>
                    'Premium account for Michael Davis, includes both rental and sales options at discounted rates.',
            ],
        ]);
    }
}
