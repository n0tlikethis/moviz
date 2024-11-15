<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id('movie_id');
            $table->date('release_year');
            $table->string('movie_title');
            $table->tinyText('movie_description');
            $table->integer('number_in_stock');
            $table->enum('rental_or_sale_or_both', ['rental', 'sale', 'both']);
            $table->integer('rental_daily_rate');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
