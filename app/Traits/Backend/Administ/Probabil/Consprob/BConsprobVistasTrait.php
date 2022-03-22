<?php

namespace App\Traits\Backend\Administ\Probabil\Consprob;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait BConsprobVistasTrait
{
    public function getParamPesta()
    {
        $this->pestania[2][4] = true;
        $this->pestania[2][2] = [$this->padrexxx->tconsecu_id];
        $this->pestania[4][2] = [$this->padrexxx->id];
    }
    public function view()
    {
        $this->getParamPesta();
        $this->getVista();
        $this->getRespuesta(['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER', 'parametr' => [$this->padrexxx->id]]);
        // indica si se esta actualizando o viendo 
        if (!is_null($this->opciones['modeloxx'])) {
            $this->opciones['parametr'] = [$this->opciones['modeloxx']->id];
            $this->getRespuesta(['btnxxxxx' => 'a', 'tituloxx' => 'NUEVO REGISTRO', $this->opciones['modeloxx'] . '.nuevoxxx', 'parametr' => [$this->padrexxx->id]]);
        }
        $this->opciones['probabil']=$this->getProbabilCT([]);
        $this->getPestanias([]);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacomp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
