<?php

use Illuminate\Database\Seeder;

class seeder_detalle_compra extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detalle_factura = factory(App\modelos\Factura_encabezado::class, 10)
        ->create()
        ->each(function($factura_encabezado){
        	$factura_encabezado->detalle_compra()->save(factory(App\modelos\Detalle_compra::class)->make());
        });
    }
}
