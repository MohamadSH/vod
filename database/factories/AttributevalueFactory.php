<?php

use Faker\Generator as Faker;

$factory->define(App\Attributevalue::class, function (Faker $faker) {
    return [
        'name'=>$faker->title,
        'description'=>$faker->paragraph
    ];
});
