<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curriculo extends Model
{
    protected $table='curriculo';
    protected $primaryKey='id_curriculo';
    public $timestamps=false;

    protected $fillable =[
        'id_candidato',
        'ruta_curriculo',
        'publicacion_curriculo',
        'titulo_curriculo',
        'categoria_curriculo',
        'contrato_curriculo',
        'ciudad_curriculo'
    ];

    protected $guarded =[

    ];
}
