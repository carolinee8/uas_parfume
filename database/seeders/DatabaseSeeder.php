<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Acara;
use App\Models\Product;
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
        Product::factory(16)->create();
        Acara::factory(20)->create();

        Tag::create([
            'tag_name' => 'tag 1'
        ]);

        Tag::create([
            'tag_name' => 'tag 2'
        ]);
    }
}
