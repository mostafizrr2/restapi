<?php

use App\Model\Review;
use App\Model\Product;
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
        // $this->call(UsersTableSeeder::class);
        // factory(Product::class, 100)->create();
        factory(Review::class, 500)->create();
    }
}
