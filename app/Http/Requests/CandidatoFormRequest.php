<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CandidatoFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email_candidato'=>'required|max:191|email',
            'contrasenia_candidato'=>'required|max:191|string',
            'ciudad_candidato'=>'required|max:20|string',
            'direccion_candidato'=>'required|max:30|string',
            'telefono_candidato'=>'numeric',
            'celular_candidato'=>'required|numeric',
            'nombre_candidato'=>'required|max:30|string',
            'apellido_candidato'=>'required|max:30|string',
            'foto',
            'fecha_nacimiento'=>'required',
            'sexo'=>'required|max:10|string',
            'estado_civil'=>'required|max:10|string',
            'tipo_documento_identidad'=>'required|max:20|string',
            'numero_documento_identidad'=>'required|max:20|string',
            'premium_candidato'=>'required',
        ];
    }
}
