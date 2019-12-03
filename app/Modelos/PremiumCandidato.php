<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class PremiumCandidato extends Model
{
    protected $table='premium_candidato';
    protected $primaryKey='id_premiumc';
    public $timestamps=false;

    protected $fillable =[
        'id_candidatop'
    ];

    protected $guarded =[

    ];
}
