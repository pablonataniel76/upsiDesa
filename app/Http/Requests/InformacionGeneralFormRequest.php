<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InformacionGeneralFormRequest extends FormRequest
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
            'titulo_informacion'=>'required|max:20|string',
            'categoria_informacion'=>'required|max:30|string',
            'contrato_informacion'=>'required|max:20|string',
            'pretension_salarial'=>'required',
            'presentacion_biografica'=>'required|max:500|string',
            'ciudad_residencia_actual'=>'required|max:20|string'
        ];
    }
}
