<?php

use Faker\Generator as Faker;
use App\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' =>  $faker->word,
        'description' =>  $faker->sentence(10),
        'long_description' => $faker->text,
        'price' => $faker->randomFloat(2,5,150)
    ];
});
