<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{

    protected $fillable = [
        'name','resturant_id', 'detail', 'thumb'
    ];
}
