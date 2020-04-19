<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    //$product_images->product
    public function product() {
        return $this->belongsTo(Product::class);
    }
}
