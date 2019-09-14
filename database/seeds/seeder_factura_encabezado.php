<?php

use Illuminate\Database\Seeder;

class seeder_factura_encabezado extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $factura = factory(App\modelos\Proveedor::class, 10)
        ->create()
        ->each(function($proveedor){
        	$proveedor->Factura_encabezado()->save(factory(App\modelos\Factura_encabezado::class)->make());
        });
    }
}
