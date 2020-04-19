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
        /*factory(Category::class,5)->create();
        factory(Product::class,100)->create();
        factory(ProductImages::class,200)->create();        */

        $categories = factory(Category::class,5)->create();

        $categories->each(function ($category) {
            $products = factory(Product::class,20)->make(); //not persist in DB , we create only as an objects
            $category->products()->saveMany($products); // here the products created in DB , not in the before sentence.

            $products->each(function($product) {
                $images = factory(ProductImages::class,5)->make();     
                 $product->images()->saveMany($images);
            });
        });
    }
}
