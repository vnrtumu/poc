<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        'item_name' => $faker->name,
        'item_price' => $faker->randomNumber($nbDigits = 3, $strict = true) ,
        
        'item_image' => $faker->imageUrl($width = 200, $height = 200),
    ];
});
