<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExperienciaLaboralFormRequest extends FormRequest
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
            'id_candidato'=>'required',
            'cargo_empresa'=>'required|max:30|string',
            'nombre_empresa'=>'required|max:50|string',
            'categoria_experiencia'=>'max:30|string',
            'descripcion_experiencia'=>'max:300|string',
            'pais_experiencia'=>'required|max:20|string',
            'ciudad_experiencia'=>'required|max:20|string',
            'fecha_inicio_experiencia'=>'required',
            'fecha_fin_experiencia',
            'personas_cargo'=>'numeric',
            'anios_experiencia'=>'numeric',
            'trabajo_actualmente',
            'nombre_referencia'=>'max:30|string',
            'telefono_referencia'=>'numeric'
        ];
    }
}
