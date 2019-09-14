<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_compras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->integer('cantidad');
            $table->decimal('costo', 15,2);
            $table->decimal('total', 15,2);
            $table->integer('id_encabezado')->unsigned();
            $table->json('datos');
            $table->foreign('id_encabezado')->references('id')->on('factura_encabezados');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_compras');
    }
}
