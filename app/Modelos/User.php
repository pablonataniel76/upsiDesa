<?php

namespace App\Modelos;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function scopeCategoria($query, $categoria){
        if($categoria){
            return $query->where('categoria', 'LIKE', "%$categoria%");
        }
    }

    public function scopeCiudad($query, $ciudad){
        if($ciudad){
            return $query->where('ciudad', 'LIKE', "%$ciudad%");
        }
    }

    public function scopeContrato($query, $contrato){
        if($contrato){
            return $query->where('contrato', 'LIKE', "%$contrato%");
        }
    }
}
