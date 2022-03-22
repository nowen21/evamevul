<?php

namespace App\Http\Requests\Backend\Administ;

use Illuminate\Foundation\Http\FormRequest;

class MotivoEdiarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'motivo.required'               => 'Ingrese un nombre para el motivo',
            'motivo.unique'               => 'El nombre del motivo ya existe',
        ];        
        $this->_reglasx = [
            'motivo'               => ['required'],
           
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
        $this->_reglasx['motivo'][1]='unique:motivos,motivo,' . $this->segments()[2];
        return  $this->_reglasx;
    }
}
