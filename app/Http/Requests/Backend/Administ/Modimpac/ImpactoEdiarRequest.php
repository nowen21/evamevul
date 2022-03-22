<?php

namespace App\Http\Requests\Backend\Administ\Modimpac;

use Illuminate\Foundation\Http\FormRequest;

class ImpactoEdiarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'impacto.required'               => 'Ingrese un nombre para el impacto',
            'impacto.unique'               => 'El nombre del impacto ya existe',
        ];        
        $this->_reglasx = [
            'impacto'               => ['required'],
           
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
        $this->_reglasx['impacto'][1]='unique:impactos,impacto,' . $this->segments()[2];
        return  $this->_reglasx;
    }
}
