<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Product;
use App\ProductImages;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model factories
        factory(Category::class,5)->create();
        factory(Product::class,100)->create();
        factory(ProductImages::class,200)->create();        
    }
}
