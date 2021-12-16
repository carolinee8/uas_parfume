<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Acara;
use App\Models\Product;
use App\Models\Brand;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // factory(Product::class, 16)->each(function($product){
        //     factory(Tag::class, 16)->create(['tag_id'=>$product->product_id]);
        // });
        // Product::factory(20)->create();
        Acara::factory(20)->create();
        Brand::factory(5)->create();
        Tag::factory(20)->create();
    }
}