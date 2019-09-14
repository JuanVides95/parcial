<?php

use Illuminate\Database\Seeder;

class seeder_proveedor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $proveedor = factory(App\modelos\Proveedor::class, 10)->create();
    }
}
