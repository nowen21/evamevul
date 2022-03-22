<?php

namespace App\Http\Requests\Backend\Administ;

use Illuminate\Foundation\Http\FormRequest;

class ActivoCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'activo.required'               => 'Ingrese un nombre para el activo',
            'activo.unique'               => 'El nombre del activo ya existe',
        ];        
        $this->_reglasx = [
            'activo'               => ['required', 'unique:activos,activo'],
           
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
