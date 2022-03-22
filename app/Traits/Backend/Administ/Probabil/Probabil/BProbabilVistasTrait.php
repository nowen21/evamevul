<?php

namespace App\Traits\Backend\Administ\Probabil\Probabil;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait BProbabilVistasTrait
{
    public function getParamPesta()
    {
        $this->pestania[3][2] = [$this->padrexxx->id];
    }
    public function view()
    {
        $this->getParamPesta();
        $this->getVista();
        $wherenot = [];
        foreach ($this->padrexxx->probabils as $key => $value) {
            $wherenot[] = $value->nivel_id;
        }

        $this->opciones['tipoprob']=$this->padrexxx->tipoprob;
        $this->getRespuesta(['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER', 'parametr' => [$this->padrexxx->id]]);
        // indica si se esta actualizando o viendo 
        $selectid = 0;
        if (!is_null($this->opciones['modeloxx'])) {
            $selectid = $this->opciones['modeloxx']->nivel_id;
            $this->opciones['parametr'] = [$this->opciones['modeloxx']->id];
            $this->getRespuesta(['btnxxxxx' => 'a', 'tituloxx' => 'NUEVO REGISTRO', $this->opciones['modeloxx'] . '.nuevoxxx', 'parametr' => [$this->padrexxx->id]]);
        }
        $this->opciones['nivelxxx'] = $this->getNivelCT(['selectid' => $selectid,'wherenot'=> $wherenot]);
        $this->getPestanias([]);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacomp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
