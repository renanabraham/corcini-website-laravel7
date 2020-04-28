<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(\App\Category::class, function (Faker $faker) {
    $title = $faker->sentence(10);
    $slug = Str::slug($title);
    $subttile = $faker->sentence(50);
    return [
        'slug' => $slug,
        'title' => $title,
        'subtitle' => $subttile
    ];
});
