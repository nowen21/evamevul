<?php

namespace App\Traits\Backend\Administ\Probabil\Tconsecu;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait BTconsecuVistasTrait
{
   
    public function view()
    {
        $this->getVista() ;
        $this->getRespuesta(['btnxxxxx' => 'a','tituloxx'=>'VOLVER']);
        // indica si se esta actualizando o viendo 
        if (!is_null($this->opciones['modeloxx'])) {
            $this->pestania[2][4]=true;
            $this->pestania[2][2]=[$this->opciones['modeloxx']->id];
            $this->opciones['parametr']=[$this->opciones['modeloxx']->id];
        }
        $this->getPestanias([]);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacomp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
