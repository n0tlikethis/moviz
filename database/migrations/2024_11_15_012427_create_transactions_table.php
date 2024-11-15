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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id('transaction_id');
            $table->unsignedBigInteger('account_id');
            $table->unsignedBigInteger('item_rental_id');
            $table->date('transaction_date');
            $table->integer('transaction_amount');
            $table->tinyText('transaction_comment');

            $table->foreign('account_id')->references('account_id')->on('accounts');
            $table->foreign('item_rental_id')->references('item_rental_id')->on('rentals');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
