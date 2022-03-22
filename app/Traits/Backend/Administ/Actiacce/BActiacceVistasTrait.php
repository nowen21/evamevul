<?php

namespace App\Traits\Backend\Administ\Actiacce;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait BActiacceVistasTrait
{
   
    public function view()
    {
        $this->pestania[5][2]=[$this->padrexxx->id];
        $this->getVista() ;
    
        $this->getRespuesta(['btnxxxxx' => 'a','tituloxx'=>'VOLVER ACCESOS','parametr'=>[$this->padrexxx->id]]);
        $selectid=0;
        // indica si se esta actualizando o viendo 
        if (!is_null($this->opciones['modeloxx'])) {
            $this->opciones['parametr']=[$this->opciones['modeloxx']->id];
            $selectid=$this->opciones['modeloxx']->acceso_id;
        }
        $this->opciones['actiacce']=$this->getActiacceCT(['selectid'=>$selectid,'activoxx'=>$this->padrexxx->id]);
       
        $this->getPestanias([]);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
