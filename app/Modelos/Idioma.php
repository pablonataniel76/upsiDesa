<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    protected $table='idioma';
    protected $primaryKey=null;
    public $incrementing = false;
    public $timestamps=false;

    protected $fillable =[
        'id_candidato',
        'idioma',
        'nivel_escritura',
        'nivel_oral',
        'nivel_lectura'
    ];

    protected $guarded =[

    ];
}
