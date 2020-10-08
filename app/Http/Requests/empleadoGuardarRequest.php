<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class empleadoGuardarRequest extends FormRequest
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
            'nombres'=> 'required',
            'apellidos'=> 'required',
            'cedula'=> 'required',
            'telefono'=> 'required',
            'direccion'=> 'required',
            'pase_conduccion'=> 'required',
            'fecha_ingreso'=> 'required',
        ];
    }
    public function messages(){
        return[            
            'nombres.required'=> 'El nombre es requerido',
            'apellidos.required'=> 'Los apellidos son requeridos',
            'cedula.required'=> 'La cedula es requerida',
            'telefono.required'=> 'El telefono es requerido',
            'direccion.required'=> 'La direccion es requerida',
            'pase_conduccion.required'=> 'El pase de conduccion es requerido',
            'fecha_ingreso.required'=> 'La fecha ingreso es requerida',
        ];
    }
}
