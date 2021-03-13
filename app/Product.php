<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public function productHistory() {
        return $this->hasManyThrough(App\History::class, App\Product::class);
    }
}

