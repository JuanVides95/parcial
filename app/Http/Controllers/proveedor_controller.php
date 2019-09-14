<?php

namespace App\Http\Controllers;
use App\modelos\Proveedor;
use Illuminate\Http\Request;

class proveedor_controller extends Controller
{
     public function index(){
    	$proveedor = Proveedor::find(3);
    	return $proveedor->full_name;
    }

}
