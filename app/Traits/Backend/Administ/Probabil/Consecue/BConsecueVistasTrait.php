<?php

namespace App\Traits\Backend\Administ\Probabil\Consecue;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait BConsecueVistasTrait
{
    public function getParamPesta()
    {
        $this->pestania[2][2] = [$this->padrexxx->id];
    }
    public function view()
    {
        $this->getParamPesta();
        $this->getVista();
        $this->getRespuesta(['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER', 'parametr' => [$this->padrexxx->id]]);
        // indica si se esta actualizando o viendo 
        if (!is_null($this->opciones['modeloxx'])) {
            $this->pestania[4][4]=true;
            $this->pestania[4][2]=[$this->opciones['modeloxx']->id];
            $this->opciones['parametr'] = [$this->opciones['modeloxx']->id];
            $this->getRespuesta(['btnxxxxx' => 'a', 'tituloxx' => 'NUEVO REGISTRO', $this->opciones['modeloxx'] . '.nuevoxxx', 'parametr' => [$this->padrexxx->id]]);
        }
        $this->getPestanias([]);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacomp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
