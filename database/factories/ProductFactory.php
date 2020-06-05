<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'Title' => $faker->sentence,
        'Description' => $faker->paragraph(),
        'Price' => $faker->randomFloat($nbMaxDecimal = 1, $min = 10, $max = 330),
        'Size' => $faker->randomElement($array = array('XS','S','M','L','XL')),
        'Status' => $faker->randomElement(['published','unpublished']),
        'Code' => $faker->randomElement(['solde','new']),
        'reference' => $faker->ean13(),
        'categorie_id' => function () {
            // Get a random categorie id from categorie table
            return App\Categorie::inRandomOrder()->first()->id;
        },
    ];
});
