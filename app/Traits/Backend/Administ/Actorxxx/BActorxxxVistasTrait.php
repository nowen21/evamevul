<?php

namespace App\Traits\Backend\Administ\Actorxxx;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait BActorxxxVistasTrait
{
   
    public function view()
    {
        $this->getVista() ;
        $this->getRespuesta(['btnxxxxx' => 'a','tituloxx'=>'VOLVER ACCESOS']);
        // indica si se esta actualizando o viendo 
        if (!is_null($this->opciones['modeloxx'])) {
            $this->opciones['parametr']=[$this->opciones['modeloxx']->id];
        }
        $this->getPestanias([]);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
