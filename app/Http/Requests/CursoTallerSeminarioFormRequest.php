<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CursoTallerSeminarioFormRequest extends FormRequest
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
            'nombre_taller'=>'required|max:30|string',
            'impartido_por'=>'max:30|string',
            'lugar_taller'=>'required|max:30|string',
            'fecha_taller'=>'required'
            ];
    }
}
