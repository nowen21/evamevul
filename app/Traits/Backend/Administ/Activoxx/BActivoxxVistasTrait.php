<?php

namespace App\Traits\Backend\Administ\Activoxx;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait BActivoxxVistasTrait
{
   
    public function view()
    {
        $this->getVista() ;
        $this->getRespuesta(['btnxxxxx' => 'a','tituloxx'=>'VOLVER ACTIVOS']);
        // indica si se esta actualizando o viendo 
        if (!is_null($this->opciones['modeloxx'])) {
            $this->pestania[5][4]=true;
            $this->pestania[5][2]=[$this->opciones['modeloxx']->id];
            $this->opciones['parametr']=[$this->opciones['modeloxx']->id];
        }
        $this->getPestanias([]);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
