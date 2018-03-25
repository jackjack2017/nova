<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\Product::class, function (Faker $faker) {

    return [
        'name' => $name = $faker->word,
        'slug' => str_slug($name),
        'active' => true,
        'new' => rand(0,1),
        'top' => rand(0,1),
        'article' => $faker->numberBetween(10000, 99999),
        'price' => $faker->numberBetween(100, 1000),
        'description' => $faker->text(),
        'brand' => $faker->word,
        'season' => $faker->word,
        'style' => $faker->word,
        'textile' => $faker->word,
//        'main_image' => $faker->imageUrl(640,480)
    ];
});
