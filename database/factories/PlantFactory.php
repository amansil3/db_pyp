<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PlantType as Tipo;
use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Planta::class, function (Faker $faker) {
    $tipo = Tipo::pluck('id')->toArray();
    return [
        'nombre_vulgar' => $faker->sentence(1),
        'nombre_cientifico' => $faker->sentence(2, false),
        //'plant_type_id' => factory(Tipo::class),
        'plant_type_id' => $faker->randomElement($tipo),
        'cantidad' => $faker->randomDigit(100),
    ];
});
