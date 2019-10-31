<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    protected $table='candidato';
    protected $primaryKey='id_candidato';
    public $timestamps=false;

    protected $fillable=[
        'email_candidato',
        'contrasenia_candidato',
        'ciudad_candidato',
        'direccion_candidato',
        'telefono_candidato',
        'celular_candidato',
        'nombre_candidato',
        'apellido_candidato',
        'foto',
        'fecha_nacimiento',
        'sexo',
        'estado_civil',
        'tipo_documento_identidad',
        'numero_documento_identidad',
        'premium_candidato'
    ];
    
    protected $guarded=[

    ];
}
