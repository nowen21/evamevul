<?php

namespace App\Http\Requests\Backend\Administ;

use Illuminate\Foundation\Http\FormRequest;

class ResuprobCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'tipoprob_id.required'               => 'Seleccione la probabilidad',
            'nivel_id.required'               => 'Seleccione el nivel',
        ];
        $this->_reglasx = [
            'tipoprob_id'               => ['required'],
            'nivel_id'               => ['required'],
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
