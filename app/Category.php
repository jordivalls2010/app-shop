<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products(){
        //$category->products;
        return $this->hasMany(Product::class);
    }
}
