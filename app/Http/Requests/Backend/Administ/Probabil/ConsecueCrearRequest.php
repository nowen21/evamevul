<?php

namespace App\Http\Requests\Backend\Administ\Probabil;

use Illuminate\Foundation\Http\FormRequest;

class ConsecueCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'consecue.required'               => 'Ingrese el nombre de la consecuencia',
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
        return  $this->_reglasx;
    }
}
