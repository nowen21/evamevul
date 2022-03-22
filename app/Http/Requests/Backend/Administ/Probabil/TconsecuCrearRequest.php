<?php

namespace App\Http\Requests\Backend\Administ\Probabil;

use Illuminate\Foundation\Http\FormRequest;

class TconsecuCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'tconsecu.required'               => 'Ingrese un nombre para el tipo de consecuencia',
            'tconsecu.unique'               => 'El nombre del tipo de consecuencia ya existe',
        ];        
        $this->_reglasx = [
            'tconsecu'               => ['required', 'unique:tconsecus,tconsecu'],
           
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
