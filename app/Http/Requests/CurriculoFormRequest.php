<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CurriculoFormRequest extends FormRequest
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
            'ruta_curriculo'=>'required|max:250',
            'publicacion_curriculo'=>'required',
            'titulo_curriculo'=>'required|max:20|string',
            'categoria_curriculo'=>'required|max:30|string',
            'contrato_curriculo'=>'required|max:20|string',
            'ciudad_curriculo'=>'required|max:20|string'
        ];
    }
}
