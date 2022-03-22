<?php

namespace App\Http\Requests\Backend\Administ\Probabil;

use Illuminate\Foundation\Http\FormRequest;

class ConsecueEdiarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'consecue.required'               => 'Ingrese un nombre de la consecuencia',
            'consecue.unique'               => 'El nombre de la consecuencia ya existe',
        ];        
        $this->_reglasx = [
            'consecue'               => ['required', 'unique:consecues,consecue'],
           
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
        $this->_reglasx['consecue'][1]='unique:consecues,consecue,' . $this->segments()[2];
        return  $this->_reglasx;
    }
}
