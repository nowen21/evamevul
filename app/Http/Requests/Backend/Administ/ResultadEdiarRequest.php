<?php

namespace App\Http\Requests\Backend\Administ;

use Illuminate\Foundation\Http\FormRequest;

class ResultadEdiarRequest extends FormRequest
{ private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'resultad.required'               => 'Ingrese un nombre para el resultad',
            'resultad.unique'               => 'El nombre del resultad ya existe',
        ];        
        $this->_reglasx = [
            'resultad'               => ['required'],
           
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
        $this->_reglasx['resultad'][1]='unique:resultads,resultad,' . $this->segments()[2];
        return  $this->_reglasx;
    }
}
