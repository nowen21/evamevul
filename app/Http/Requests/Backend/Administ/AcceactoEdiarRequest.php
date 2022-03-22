<?php

namespace App\Http\Requests\Backend\Administ;

use Illuminate\Foundation\Http\FormRequest;

class AcceactoEdiarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'actor_id.required'               => 'Seleccione el actor',
            // 'actor.unique'               => 'El nombre del actor ya existe',
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
        // $this->_reglasx['acceso'][1]='unique:accesos,acceso,' . $this->segments()[2];
        return  $this->_reglasx;
    }
}
