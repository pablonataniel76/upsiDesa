<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnuncioFormRequest extends FormRequest
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
            'id_empresa'=>'required',
            'cargo_anuncio'=>'required|max:30|string',
            'categoria_anuncio'=>'required|max:30|string',
            'contrato_anuncio'=>'required|max:20|string',
            'descripcion_anuncio'=>'required|max:500|string',
            'sueldo'=>'numeric',
            'tipo_sueldo'=>'max:20|string',
            'ciudad_anuncio'=>'required|max:20|string',
            'publicacion_anuncio'=>'required',
            'vencimiento_anuncio'=>'required'
        ];
    }
}
