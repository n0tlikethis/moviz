<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Fetch existing account IDs and rental IDs
        $accountIds = DB::table('accounts')->pluck('account_id');
        $rentalIds = DB::table('rentals')->pluck('item_rental_id');

        // Ensure there are enough accounts and rentals to seed transactions
        if ($accountIds->isEmpty() || $rentalIds->isEmpty()) {
            return;
        }

        DB::table('transactions')->insert([
            [
                'account_id' => $accountIds[0],
                'item_rental_id' => $rentalIds[0],
                'transaction_date' => now()->subDays(4)->toDateString(),
                'transaction_amount' => 15,
                'transaction_comment' => 'Rental payment for movie rental',
            ],
            [
                'account_id' => $accountIds[1],
                'item_rental_id' => $rentalIds[1],
                'transaction_date' => now()->subDays(6)->toDateString(),
                'transaction_amount' => 12,
                'transaction_comment' => 'Late fee payment for movie rental',
            ],
            [
                'account_id' => $accountIds[2],
                'item_rental_id' => $rentalIds[2],
                'transaction_date' => now()->subDays(8)->toDateString(),
                'transaction_amount' => 8,
                'transaction_comment' => 'Payment for movie rental',
            ],
            [
                'account_id' => $accountIds[3],
                'item_rental_id' => $rentalIds[3],
                'transaction_date' => now()->subDays(2)->toDateString(),
                'transaction_amount' => 5,
                'transaction_comment' => 'Payment for movie rental',
            ],
            [
                'account_id' => $accountIds[4],
                'item_rental_id' => $rentalIds[4],
                'transaction_date' => now()->subDays(10)->toDateString(),
                'transaction_amount' => 10,
                'transaction_comment' =>
                    'Payment for rental and purchase of movie',
            ],
        ]);
    }
}
