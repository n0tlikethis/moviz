<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    protected $primaryKey = 'item_rental_id';

    public $timestamps = false;

    public function customer()
    {
        return $this->belongsT(Customer::class, 'customer_id', 'customer_id');
    }

    public function movie()
    {
        return $this->belongsTo(Movie::class, 'movie_id', 'movie_id');
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class, 'item_rental_id', 'item_rental_id');
    }
}
