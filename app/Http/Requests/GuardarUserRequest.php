<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarUserRequest extends FormRequest
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
                "id_usuario"=>"required|unique:users,id_usuario",
                "name"=>"required",
                "email"=>"required",
                "password"=>"required",
                "usuario"=>"required",
                "perfil"=>"required",
            ];
    }
}
