<?php

namespace App\Http\Requests\Backend\Administ;

use Illuminate\Foundation\Http\FormRequest;

class MotiresuCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'resultad_id.required'               => 'Seleccione el resultad',
            // 'resultad.unique'               => 'El nombre del resultad ya existe',
        ];
        $this->_reglasx = [
            'resultad_id'               => ['required'],

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
