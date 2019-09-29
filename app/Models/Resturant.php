<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resturant extends Model
{
    //
    protected $fillable = [
        'name', 'location', 'adrs', 'tell', 'detail', 'thumb'
    ];

    public function user()
    {
        return $this->belongsToMany('App\User', 'resturant_users', 'resturant_id', 'user_id');
    }
}
