<?php

namespace App\Http\Requests\Backend\Administ;

use Illuminate\Foundation\Http\FormRequest;

class ResuimpaCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'impacto_id.required'               => 'Seleccione el impacto',
            'nivel_id.required'               => 'Seleccione el nivel',
        ];
        $this->_reglasx = [
            'impacto_id'               => ['required'],
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
