<?php

namespace App\modelos;

use Illuminate\Database\Eloquent\Model;

class Detalle_compra extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'detalle_compras';
    protected $fillable = ['descripcion', 'cantidad', 'costo', 'total', 'id_encabezado', 'datos'];
    protected $hidden = ['created_at','updated_at'];

    public function factura_encabezado(){
    	return $this->belongsTo('App\modelos\Factura_encabezado', 'id');
    }

    public function setNameCompraAttribute($value){
    	$this->attribute['descripcion']=strtolower($value);
    }

    protected $casts=[
    	'datos'=> 'array'
    ];
}
