<?php

namespace App\Http\Controllers;

use App\modelos\Factura_encabezado;
use Illuminate\Http\Request;

class factura_ecabezado_controller extends Controller
{
    public function index(){
    	$encabezado = Factura_encabezado::find(1);
    	return $encabezado;
    }
}
