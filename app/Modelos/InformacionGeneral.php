<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class InformacionGeneral extends Model
{
    protected $table='informacion_general';
    protected $primaryKey=null;
    public $incrementing = false;
    public $timestamps=false;

    protected $fillable =[
        'id_candidato',
        'titulo_informacion',
        'categoria_informacion',
        'contrato_informacion',
        'pretension_salarial',
        'presentacion_biografica',
        'ciudad_residencia_actual'
    ];

    protected $guarded =[

    ];
}
