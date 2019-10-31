<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class ExperienciaLaboral extends Model
{
    protected $table='experiencia_laboral';
    protected $primaryKey=null;
    public $incrementing = false;
    public $timestamps=false;

    protected $fillable =[
        'id_candidato',
        'cargo_empresa',
        'nombre_empresa',
        'categoria_experiencia',
        'descripcion_experiencia',
        'pais_experiencia',
        'ciudad_experiencia',
        'fecha_inicio_experiencia',
        'fecha_fin_experiencia',
        'personas_cargo',
        'anios_experiencia',
        'trabajo_actualmente',
        'nombre_referencia',
        'telefono_referencia'
    ];

    protected $guarded =[

    ];
}
