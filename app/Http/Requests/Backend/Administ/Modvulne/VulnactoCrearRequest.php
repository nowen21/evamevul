<?php

namespace App\Http\Requests\Backend\Administ\Modvulne;

use Illuminate\Foundation\Http\FormRequest;

class VulnactoCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'actor_id.required'               => 'Seleccione un actor',
        ];        
        $this->_reglasx = [
            'actor_id'               => ['required'],
           
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
