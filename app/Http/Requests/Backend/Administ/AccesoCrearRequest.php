<?php

namespace App\Http\Requests\Backend\Administ;

use Illuminate\Foundation\Http\FormRequest;

class AccesoCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'acceso.required'               => 'Ingrese un nombre para el acceso',
            'acceso.unique'               => 'El nombre del acceso ya existe',
        ];        
        $this->_reglasx = [
            'acceso'               => ['required', 'unique:accesos,acceso'],
           
        ];
    }

    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return $this->_mensaje;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return  $this->_reglasx;
    }
}
