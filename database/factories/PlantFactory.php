<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Planta::class, function (Faker $faker) {
    return [
        'nombre' => $faker->sentence,
        'cientifico' => $faker->sentence,
        'plant_type_id' => $faker->rand(1,3),
        'cantidad' => $faker->rand(1,100),
    ];
});
