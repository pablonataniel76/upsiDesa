<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $table='administrador';
    protected $primaryKey='id_admin';
    public $timestamps=false;

    protected $fillable =[
        'email_admin',
        'contrasenia_admin',
        'pais_admin',
        'ciudad_admin',
        'direccion_admin',
        'telefono_admin',
        'celular_admin'
    ];

    protected $guarded =[

    ];
}
