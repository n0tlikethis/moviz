<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            [
                'release_year' => '2023-05-15',
                'movie_title' => 'The Last Adventure',
                'movie_description' =>
                    'A thrilling action movie about a hero on a quest to save the world.',
                'number_in_stock' => 50,
                'rental_or_sale_or_both' => 'both',
                'rental_daily_rate' => 5,
            ],
            [
                'release_year' => '2022-11-22',
                'movie_title' => 'The Silent Echo',
                'movie_description' =>
                    'A suspenseful drama where silence speaks louder than words.',
                'number_in_stock' => 30,
                'rental_or_sale_or_both' => 'rental',
                'rental_daily_rate' => 3,
            ],
            [
                'release_year' => '2021-08-10',
                'movie_title' => 'Space Chronicles',
                'movie_description' =>
                    'A sci-fi journey to a distant galaxy where only the brave survive.',
                'number_in_stock' => 100,
                'rental_or_sale_or_both' => 'sale',
                'rental_daily_rate' => 0,
            ],
            [
                'release_year' => '2023-01-05',
                'movie_title' => 'The Deep Sea',
                'movie_description' =>
                    'An underwater exploration turns into a battle for survival.',
                'number_in_stock' => 20,
                'rental_or_sale_or_both' => 'both',
                'rental_daily_rate' => 4,
            ],
            [
                'release_year' => '2020-03-30',
                'movie_title' => 'The Lost Kingdom',
                'movie_description' =>
                    'A medieval epic about kings, queens, and forgotten lands.',
                'number_in_stock' => 10,
                'rental_or_sale_or_both' => 'sale',
                'rental_daily_rate' => 0,
            ],
        ]);
    }
}
