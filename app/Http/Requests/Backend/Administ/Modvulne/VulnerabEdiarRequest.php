<?php

namespace App\Http\Requests\Backend\Administ\Modvulne;

use Illuminate\Foundation\Http\FormRequest;

class VulnerabEdiarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'vulnerab.required'               => 'Ingrese un nombre para el tipo de consecuencia',
            'vulnerab.unique'               => 'El nombre del tipo de consecuencia ya existe',
        ];        
        $this->_reglasx = [
            'vulnerab'               => ['required'],
           
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
        $this->_reglasx['vulnerab'][1]='unique:vulnerabs,vulnerab,' . $this->segments()[2];
        return  $this->_reglasx;
    }
}
