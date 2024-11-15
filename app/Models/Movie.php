<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $primaryKey = 'movie_id';

    public $timestamps = false;

    public function rental()
    {
        return $this->hasMany(Rental::class, 'movie_id', 'movie_id');
    }
}
