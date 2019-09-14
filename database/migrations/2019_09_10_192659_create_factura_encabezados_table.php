<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturaEncabezadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura_encabezados', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->decimal('total', 15,2);
            $table->integer('anulado');
            $table->integer('id_proveedor')->unsigned();
            $table->foreign('id_proveedor')->references('id')->on('proveedors');
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
        Schema::dropIfExists('factura_encabezados');
    }
}
