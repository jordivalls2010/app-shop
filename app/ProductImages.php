<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    //$product_images->product
    public function product() {
        return $this->belongsTo(Product::class);
    }

    //ACCESSOR :: campo calculado getXAttribute
    public function getUrlAttribute(){
        
        if (substr($this->image,0,4) === "http" ) {
            return $this->image;
        }
        
        return '/images/products/' . $this->image;
    }
}
