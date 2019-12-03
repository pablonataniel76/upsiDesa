<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class PeriodoCandidatop extends Model
{
    protected $table='periodo_candidatop';
    protected $primaryKey='id_periodoc';
    public $timestamps=false;

    protected $fillable =[
        'id_candidatoperiodo',
        'inicio_suscripcion',
        'fin_suscripcion'
    ];

    protected $guarded =[

    ];
}
