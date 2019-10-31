<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class EducacionSecundaria extends Model
{
    protected $table='educacion_secundaria';
    protected $primaryKey=null;
    public $incrementing = false;
    public $timestamps=false;

    protected $fillable =[
        'id_candidato',
        'institucion_secundaria',
        'pais_secundaria',
        'ciudad_secundaria',
        'fecha_fin_secundaria'
    ];

    protected $guarded =[

    ];
}
