<?php

namespace App\Http\Requests\Backend\Administ\Modvulne;

use Illuminate\Foundation\Http\FormRequest;

class ActoherrEdiarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'herramie_id.required'               => 'Seleccione un herramienta',
        ];        
        $this->_reglasx = [
            'herramie_id'               => ['required'],
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
