<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Postulacion extends Model
{
    protected $table='postulacion';
    protected $primaryKey=null;
    public $incrementing = false;
    public $timestamps=false;

    protected $fillable=[
        'id_anuncio',
        'id_curriculo'
    ];

    protected $guarded=[

    ];
}
