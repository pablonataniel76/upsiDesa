<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EducacionSecundariaFormRequest extends FormRequest
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
            'institucion_secundaria'=>'required|max:30|string',
            'pais_secundaria'=>'required|max:20|string',
            'ciudad_secundaria'=>'required|max:20|string',
            'fecha_fin_secundaria'=>'required'
        ];
    }
}
