<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\modelos\Detalle_compra;
use Faker\Generator as Faker;

$factory->define(App\modelos\Detalle_compra::class, function (Faker $faker) {
    return [
    	'descripcion'=>$faker->name,
    	'cantidad'=>$faker->numberBetween($min = 1, $max = 10),
        'costo'=>$faker->randomDigit,
        'total'=>$faker->randomDigit,

        'datos'=>[
        	"descripcion"=>$faker->name,
    		"cantidad"=>$faker->numberBetween($min = 1, $max = 10),
        	"costo"=>$faker->randomDigit,
        	"total"=>$faker->randomDigit
        ],

        'id_encabezado'=>function(){
        	return factory(App\modelos\Factura_encabezado::class)->create()->id;
        }
    ];
});
