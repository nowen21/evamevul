<?php

namespace App\Traits\Frontend\Welcomex\Welcomex;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait FWelcomexVistasTrait
{
   
    public function view()
    {
        $this->getVista() ;
        // indica si se esta actualizando o viendo 
        if (!is_null($this->opciones['modeloxx'])) {
            $this->opciones['parametr']=[$this->opciones['modeloxx']->idta_rete];
        }
        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
