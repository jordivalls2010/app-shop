<?php

use Faker\Generator as Faker;
use App\ProductImages;
 
$factory->define(ProductImages::class, function (Faker $faker) {
    return [
        'image' => 'https://picsum.photos/250/250?random='.$faker->numberBetween(1,100),        
        'product_id' =>  $faker->numberBetween(1,100)
    ];
});
