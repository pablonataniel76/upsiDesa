<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EducacionUniversitariaFormRequest extends FormRequest
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
            'universidad'=>'required|max:50|string',
            'carrera'=>'required|max:30|string',
            'pais_universidad'=>'required|max:20|string',
            'ciudad_univeridad'=>'required|max:20|string',
            'fecha_fin_universidad'
        ];
    }
}
