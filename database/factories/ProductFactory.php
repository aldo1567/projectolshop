<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        //
        'product_name' =>$faker->firstNameMale,
        'price' => $faker->numberBetween(10000,1000000),
        'desc' => $faker->paragraph($nbSentences = 2, $variableNbSentences=true),
        'image' => '/storage/images/product.jpg'
    ];
});
