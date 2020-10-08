<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class direccionGuardarRequest extends FormRequest
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
            'direccion'=> 'required|min:1|max:100',            
        ];
    }
    public function messages(){
        return[
            'direccion.required'=> 'La direccion es requerida',
            'direccion.min'=> 'La direccion debe tener como minimo 1 caracter',
            'direccion.max'=> 'La direccion debe tener como maximo 100 caracteres',                       
        ];
    }
}
