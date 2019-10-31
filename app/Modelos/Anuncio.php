<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    protected $table='anuncio';
    protected $primaryKey='id_anuncio';
    public $timestamps=false;

    protected $fillable =[
        'id_empresa',
        'cargo_anuncio',
        'categoria_anuncio',
        'contrato_anuncio',
        'descripcion_anuncio',
        'sueldo',
        'tipo_sueldo',
        'ciudad_anuncio',
        'publicacion_anuncio',
        'vencimiento_anuncio'
    ];

    protected $guarded =[

    ];
}
