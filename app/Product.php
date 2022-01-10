<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Searchable;

class Product extends Model
{
 
    protected $fillable = ['product_name', 'unit_price', 'description', 'category_id', 'image', 'exp_date'];
    public function productHistory() {
        return $this->hasManyThrough(App\History::class, App\Product::class);
    }
}

