<?php

namespace App\Traits\Backend\Administ\Modimpac\Impactox;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait BImpactoxVistasTrait
{
   
    public function view()
    { 
        $this->getVista();
        $this->getRespuesta(['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER', ]);
        // indica si se esta actualizando o viendo 
        if (!is_null($this->opciones['modeloxx'])) {
           
            $this->opciones['parametr'] = [$this->opciones['modeloxx']->id];
            $this->getRespuesta(['btnxxxxx' => 'a', 'tituloxx' => 'NUEVO REGISTRO', 'routexxx'=>$this->opciones['permisox'] . '.nuevoxxx',]);
        }
    
        $this->getPestanias([]);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['pestanix'], ['todoxxxx' => $this->opciones]);
    }
}
