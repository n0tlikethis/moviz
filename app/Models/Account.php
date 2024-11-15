<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $primaryKey = 'account_id';

    public $timestamps = false;

    public function transaction()
    {
        return $this->hasMany(Transaction::class, 'account_id', 'account_id');
    }
}
