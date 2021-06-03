<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditarFincaRequest extends FormRequest
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
            "id_finca"=>"required|unique:fincas,id_finca,".$this->route('finca')->id,
            "nombre"=>"required",
            "legalidad"=>"required",
            "comunidad"=>"required",
            "municipio"=>"required",
            "departamento"=>"required",
            "pais"=>"required",
            "disponibilidad_energia"=>"required",
            "disponibilidad_agua"=>"required"
        ];
    }
}
