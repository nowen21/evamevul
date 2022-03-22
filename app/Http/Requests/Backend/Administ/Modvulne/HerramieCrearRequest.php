<?php

namespace App\Http\Requests\Backend\Administ\Modvulne;

use Illuminate\Foundation\Http\FormRequest;

class HerramieCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'herramie.required'               => 'Ingrese un nombre para la herramiente',
            'herramie.unique'               => 'El nombre de la herramienta ya existe',
        ];        
        $this->_reglasx = [
            'herramie'               => ['required', 'unique:herramies,herramie'],
           
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
