<?php

namespace App\Http\Requests\Backend\Administ\Probabil;

use Illuminate\Foundation\Http\FormRequest;

class TconsecuEdiarRequest extends FormRequest
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
            'tconsecu'               => ['required'],
           
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
        $this->_reglasx['tconsecu'][1]='unique:tconsecus,tconsecu,' . $this->segments()[2];
        return  $this->_reglasx;
    }
}
