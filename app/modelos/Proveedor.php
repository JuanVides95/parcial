<?php

namespace App\modelos;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'proveedors';
    protected $fillable = ['nit', 'name', 'email', 'telefono'];
    protected $hidden = ['created_at','updated_at'];

    public function Factura_encabezado(){
    	return $this->hasMany('App\modelos\Factura_encabezado', 'id_proveedor');
    }

    public function getFullNameAttribute(){
    	return "{$this->nit}-{$this->name}";
    }

}
