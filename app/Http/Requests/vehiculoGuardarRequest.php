<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class vehiculoGuardarRequest extends FormRequest
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
            'placa'=> 'required|min:1|max:100',
            'descripcion'=> 'required',
            'año'=> 'required',
        ];
    }
    public function messages(){
        return[
            'placa.required'=> 'La placa es requerida',
            'placa.min'=> 'La placa debe tener como minimo 1 caracter',
            'placa.max'=> 'La placa debe tener como maximo 100 caracteres',
            'descripcion.required'=> 'La descripcion es requerida',
            'año.required'=> 'El año es requerido',
        ];
    }
}
