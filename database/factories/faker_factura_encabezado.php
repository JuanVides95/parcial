<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\modelos\Factura_encabezado;
use Faker\Generator as Faker;

$factory->define(App\modelos\Factura_encabezado::class, function (Faker $faker) {
    return [
        'fecha'=>$faker->date($format='Y-m-d', $max='now'),
        'total'=>$faker->randomDigit,
        'anulado'=>$faker->numberBetween($min = 0, $max = 1),
        'id_proveedor'=>function(){
        	return factory(App\modelos\Proveedor::class)->create()->id;
        }
    ];
});
