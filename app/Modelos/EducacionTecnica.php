<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EducacionTecnica extends Model
{
    protected $table='educacion_tecnica';
    protected $primaryKey=null;
    public $incrementing = false;
    public $timestamps=false;

    protected $fillable =[
        'id_candidato',
        'institucion_tecnica',
        'curso_tecnico',
        'pais_tecnico',
        'ciudad_tecnico',
        'fecha_curso_tecnico'
    ];

    protected $guarded =[

    ];
}
