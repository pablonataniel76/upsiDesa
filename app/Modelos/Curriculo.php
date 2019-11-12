<?php

namespace App\Modelos;

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

    //Scope Query revisar editables
    public function scopeCategoria($query, $categoria)
    {
        if($categoria){
            return $query->where('categoria_curriculo', 'LIKE', "%$categoria%");
        }
    }

    public function scopeCiudad($query, $ciudad)
    {
        if($ciudad){
            return $query->where('ciudad_curriculo', '=', "$ciudad");
        }
    }

    public function scopeContrato($query, $contrato)
    {
        if($contrato){
            return $query->where('contrato_curriculo', 'LIKE', "%$contrato%");
        }
    }
}
