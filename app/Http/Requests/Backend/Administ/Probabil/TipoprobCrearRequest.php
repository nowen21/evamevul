<?php

namespace App\Http\Requests\Backend\Administ\Probabil;

use Illuminate\Foundation\Http\FormRequest;

class TipoprobCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'tipoprob.required'               => 'Ingrese un nombre para el tipo de probabilidad',
            'tipoprob.unique'               => 'El nombre del tipo de probabilidad ya existe',
        ];        
        $this->_reglasx = [
            'tipoprob'               => ['required', 'unique:tipoprobs,tipoprob'],
           
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
