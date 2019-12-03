<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IdiomaFormRequest extends FormRequest
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
            //'id_candidato'=>'required',
            'idioma'=>'required|max:15|string',
            'nivel_escritura'=>'required|max:10|string',
            'nivel_oral'=>'required|max:10|string',
            'nivel_lectura'=>'required|max:10|string'
        ];
    }
}
