<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $primaryKey = 'customer_id';

    public $timestamps = false;

    public function account()
    {
        return $this->hasMany(Account::class, 'customer_id', 'customer_id');
    }

    public function rental()
    {
        return $this->hasMany(Rental::class, 'customer_id', 'customer_id');
    }
}
