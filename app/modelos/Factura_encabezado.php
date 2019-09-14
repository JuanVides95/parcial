<?php

namespace App\modelos;

use Illuminate\Database\Eloquent\Model;

class Factura_encabezado extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'factura_encabezados';
    protected $fillable = ['fecha', 'total', 'anulado', 'id_proveedor'];
    protected $hidden = ['created_at','updated_at'];

    protected $casts=[
        'anulado'=> 'boolean'
    ];

    public function proveedor(){
    	return $this->belongsTo('App\modelos\Proveedor', 'id');
    }

    public function detalle_compra(){
    	return $this->hasMany('App\modelos\Detalle_compra', 'id_encabezado');
    }

    public function getAnuladoFacturaAttribute(){
        return "{$this->anulado}";
    }

    public function getNameProveedorAttribute(){
        return $this->proveedor;
    }

    protected $appends=[
        'anulado_factura',
        'name_proveedor'
    ];
}
