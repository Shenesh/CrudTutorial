<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public function user() {
        return $this->belongsTo(App\User::class);
    }
    public function products() {
        return $this->belongsToMany(App\Product::class);
    }
}
