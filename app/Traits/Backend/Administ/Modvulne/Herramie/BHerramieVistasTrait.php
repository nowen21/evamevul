<?php

namespace App\Traits\Backend\Administ\Modvulne\Herramie;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait BHerramieVistasTrait
{
   
    public function view()
    {
        $this->getRespuesta(['btnxxxxx' => 'a','tituloxx'=>'NUEVO REGISTRO','routexxx'=>$this->opciones['permisox'].'.nuevoxxx',]);
        $this->getVista() ;
        $this->getRespuesta(['btnxxxxx' => 'a','tituloxx'=>'VOLVER']);
        // indica si se esta actualizando o viendo 
        if (!is_null($this->opciones['modeloxx'])) {
            $this->pestania[3][4]=true;
            $this->pestania[3][2]=[$this->opciones['modeloxx']->id];
            $this->opciones['parametr']=[$this->opciones['modeloxx']->id];
        }
        $this->getPestanias([]);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacomp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
