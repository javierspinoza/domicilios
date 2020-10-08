<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class modeloGuardarRequest extends FormRequest
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
            'modelo'=> 'required|min:1|max:100',
        ];
    }
    public function messages(){
        return[
            'modelo.required'=> 'El modelo es requerido',
            'modelo.min'=> 'El modelo debe tener como minimo 1 caracter',
            'modelo.max'=> 'El modelo debe tener como maximo 100 caracteres',            
        ];
    }
}
