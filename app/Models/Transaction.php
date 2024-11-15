<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $primaryKey = 'transaction_id';

    public $timestamps = false;

    public function account()
    {
        return $this->belongsTo(Account::class, 'account_id', 'account_id');
    }

    public function rental()
    {
        return $this->belongsTo(Rental::class, 'item_rental_id', 'item_rental_id');
    }
}
