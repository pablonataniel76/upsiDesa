<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdministradorFormRequest extends FormRequest
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
        'email_admin'=>'required|max:191|email',
        'contrasenia_admin'=>'required|max:191|string',
        'pais_admin'=>'required|max:20|string',
        'ciudad_admin'=>'required|max:20|string',
        'direccion_admin'=>'required|max:30|string',
        'telefono_admin'=>'numeric',
        'celular_admin'=>'required|numeric'
        ];
    }
}
