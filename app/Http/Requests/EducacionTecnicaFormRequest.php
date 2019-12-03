<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EducacionTecnicaFormRequest extends FormRequest
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
            // 'id_candidato'=>'required',
            'institucion_tecnica'=>'required|max:30|string',
            'curso_tecnico'=>'required|max:30|string',
            'pais_tecnico'=>'required|max:20|string',
            'ciudad_tecnico'=>'required|max:20|string',
            'fecha_curso_tecnico'=>'required'
        ];
    }
}
