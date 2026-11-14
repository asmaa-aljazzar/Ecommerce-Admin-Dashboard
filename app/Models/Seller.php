<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    public function user (){
        $this->belongsTo(User::class);
    }

    public function products (){
        $this->hasMany(Product::class);
    }
}
