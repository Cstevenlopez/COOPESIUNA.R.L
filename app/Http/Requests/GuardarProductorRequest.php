<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarProductorRequest extends FormRequest
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
                //
                "id_productor"=>"required|unique:productors,id_productor",
                "fincaid"=>"required",
                "nombres"=>"required",
                "apellidos"=>"required",
                "numero_cedula"=>"required",
                "numero_telefono"=>"required",
                "comunidad"=>"required",
                "municipio"=>"required",
            ];
    }
}
