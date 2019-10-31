<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class CursoTallerSeminario extends Model
{
    protected $table='curso_taller_seminario';
    protected $primaryKey=null;
    public $incrementing = false;
    public $timestamps=false;

    protected $fillable =[
        'id_candidato',
        'nombre_taller',
        'impartido_por',
        'lugar_taller',
        'fecha_taller'
    ];

    protected $guarded =[

    ];
}
