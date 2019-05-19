<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'detaile' => $faker->paragraph,
        'price' => $faker->numberBetween(100,9999),
        'stock' => $faker->numberBetween(0,100),
        'discount' => $faker->numberBetween(0,30),
    ];
});
