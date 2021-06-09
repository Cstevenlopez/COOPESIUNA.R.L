<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditarVitacoraRequest extends FormRequest
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
            "id_vitacora"=>"required|unique:vitacora_asistencias,id_vitacora,".$this->route('vitacora')->id,
            "actividad"=>"required",
            "objetivo"=>"required",
            "temas_abordados"=>"required",
            "dificultades"=>"required",
            "soluciones"=>"required",
            "recomendaciones"=>"required",
            "fecha"=>"required",
            "siguiente_visita"=>"required",
            "productorid"=>"required",
            "usuario_id"=>"required",
        ];
    }
}
