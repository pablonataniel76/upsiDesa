<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class EducacionUniversitaria extends Model
{
    protected $table='educacion_universitaria';
    protected $primaryKey=null;
    public $incrementing = false;
    public $timestamps=false;

    protected $fillable =[
        'id_candidato',
        'universidad',
        'carrera',
        'pais_universidad',
        'ciudad_univeridad',
        'fecha_fin_universidad'
    ];

    protected $guarded =[

    ];
}
