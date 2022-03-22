<?php

namespace App\Http\Requests\Backend\Administ\Modimpac;

use Illuminate\Foundation\Http\FormRequest;

class ImpaniveCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'nivel_id.required'               => 'Seleccione un nivel',
        ];        
        $this->_reglasx = [
            'nivel_id'               => ['required', ],
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
