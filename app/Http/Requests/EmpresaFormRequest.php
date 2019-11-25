<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaFormRequest extends FormRequest
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
            'email_empresa'=>'required|max:191|email',
            'contrasenia_empresa'=>'required|max:191|string',
            'ciudad_empresa'=>'required|max:20|string',
            'direccion_empresa'=>'required|max:30|string',
            'telefono_empresa'=>'numeric',
            'celular_empresa'=>'required|numeric',
            'nombre_empresa'=>'required|max:50|string',
            'nombre_responsable'=>'required|max:30|string',
            'sitio_web'=>'max:50|string',
            'descripcion_empresa'=>'required|max:500|string',
            'logo'=>'required|max:100'//,
            //'premium_empresa'=>'required'
        ];
    }
}
