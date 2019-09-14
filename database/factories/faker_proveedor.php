<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\modelos\Proveedor;
use Faker\Generator as Faker;

$factory->define(App\modelos\Proveedor::class, function (Faker $faker) {
    return [
      'nit'=>$faker->isbn10,
      'name'=>$faker->name,
      'email'=>$faker->email,
      'telefono'=>$faker->phoneNumber
    ];
});
