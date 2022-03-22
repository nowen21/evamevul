<?php

namespace App\Http\Requests\Backend\Administ\Modvulne;

use Illuminate\Foundation\Http\FormRequest;

class HerramieEdiarRequest extends FormRequest
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
            'herramie'               => ['required',],
           
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
        $this->_reglasx['herramie'][1]='unique:herramies,herramie,' . $this->segments()[2];
        return  $this->_reglasx;
    }
}
