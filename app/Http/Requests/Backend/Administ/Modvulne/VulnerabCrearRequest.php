<?php

namespace App\Http\Requests\Backend\Administ\Modvulne;

use Illuminate\Foundation\Http\FormRequest;

class VulnerabCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'vulnerab.required'               => 'Ingrese un nombre para el tipo de probabilidad',
            'vulnerab.unique'               => 'El nombre del tipo de probabilidad ya existe',
        ];        
        $this->_reglasx = [
            'vulnerab'               => ['required', 'unique:vulnerabs,vulnerab'],
           
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
