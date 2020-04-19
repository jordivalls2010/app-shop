<?php

use Faker\Generator as Faker;
use App\ProductImages;
 
$factory->define(ProductImages::class, function (Faker $faker) {
    return [
        'image' =>  'https://image.shutterstock.com/image-photo/red-percents-sign-abstract-background-600w-1532441297.jpg',//$faker->imageUrl(250,250),
        'product_id' =>  $faker->numberBetween(1,100)
    ];
});
