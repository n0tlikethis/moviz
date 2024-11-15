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
        Schema::create('rentals', function (Blueprint $table) {
            $table->id('item_rental_id');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('movie_id');
            $table->date('rental_date_out');
            $table->date('rental_date_returned');
            $table->integer('rental_amount_due');

            $table->foreign('customer_id')->references('customer_id')->on('customers');
            $table->foreign('movie_id')->references('movie_id')->on('movies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
