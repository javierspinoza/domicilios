<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class servicioGuardarRequest extends FormRequest
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
            'fecha_hora'=> 'required',
            'descripcion'=> 'required',
            'tiempo_servicio'=> 'required',
            'direccion'=> 'required',
        ];
    }
    public function messages(){
        return[            
            'fecha_hora.required'=> 'La fecha y hora es requerida',
            'descripcion.required'=> 'La descripcion es requerida',
            'tiempo_servicio.required'=> 'El tiempo es requerido',
            'direccion.required'=> 'La direccion es requerida',

        ];
    }
}
