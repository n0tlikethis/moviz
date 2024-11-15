<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Fetch some existing customer and movie IDs
        $customerIds = DB::table('customers')->pluck('customer_id');
        $movieIds = DB::table('movies')->pluck('movie_id');

        // Check if there are enough customers and movies to seed rentals
        if ($customerIds->isEmpty() || $movieIds->isEmpty()) {
            return;
        }

        DB::table('rentals')->insert([
            [
                'customer_id' => $customerIds[0],
                'movie_id' => $movieIds[0],
                'rental_date_out' => now()->subDays(5)->toDateString(),
                'rental_date_returned' => now()->subDays(2)->toDateString(),
                'rental_amount_due' => 15,
            ],
            [
                'customer_id' => $customerIds[1],
                'movie_id' => $movieIds[1],
                'rental_date_out' => now()->subDays(10)->toDateString(),
                'rental_date_returned' => now()->subDays(8)->toDateString(),
                'rental_amount_due' => 12,
            ],
            [
                'customer_id' => $customerIds[2],
                'movie_id' => $movieIds[2],
                'rental_date_out' => now()->subDays(15)->toDateString(),
                'rental_date_returned' => now()->subDays(10)->toDateString(),
                'rental_amount_due' => 8,
            ],
            [
                'customer_id' => $customerIds[3],
                'movie_id' => $movieIds[3],
                'rental_date_out' => now()->subDays(3)->toDateString(),
                'rental_date_returned' => now()->subDays(1)->toDateString(),
                'rental_amount_due' => 5,
            ],
            [
                'customer_id' => $customerIds[4],
                'movie_id' => $movieIds[4],
                'rental_date_out' => now()->subDays(7)->toDateString(),
                'rental_date_returned' => now()->subDays(3)->toDateString(),
                'rental_amount_due' => 10,
            ],
        ]);
    }
}
