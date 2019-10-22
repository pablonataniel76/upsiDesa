<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table='empresa';
    protected $primaryKey='id_empresa';
    public $timestamps=false;

    protected $fillable=[
        'email_empresa',
        'contrasenia_empresa',
        'ciudad_empresa',
        'direccion_empresa',
        'telefono_empresa',
        'celular_empresa',
        'nombre_empresa',
        'nombre_responsable',
        'sitio_web',
        'descripcion_empresa',
        'logo',
        'premium_empresa'
    ];
    
    protected $guarded=[

    ];
}
