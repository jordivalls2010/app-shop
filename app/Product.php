<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //$product->category
    public function category() {
        return $this->belongsTo(Category::class);
    }

    //$product->images
    public function images() {
        return $this->hasMany(ProductImages::Class);
    }
}
