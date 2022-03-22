<?php

namespace App\Traits\Backend\Administ\Actomoti;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait BActomotiVistasTrait
{
   
    public function view()
    {
        $this->pestania[5][2]=[$this->padrexxx->actiacce->activo_id];
        $this->pestania[6][2]=[$this->padrexxx->actiacce_id];
        $this->pestania[7][2]=[$this->padrexxx->id];
        $this->getVista() ;
    
        $this->getRespuesta(['btnxxxxx' => 'a','tituloxx'=>'VOLVER ACCESOS','parametr'=>[$this->padrexxx->id]]);
        $selectid=0;
        // indica si se esta actualizando o viendo 
        if (!is_null($this->opciones['modeloxx'])) {
            $this->opciones['parametr']=[$this->opciones['modeloxx']->id];
            $selectid=$this->opciones['modeloxx']->motivo_id;
        }
        $this->opciones['actomoti']=$this->getActomotiCT(['selectid'=>$selectid,'padrexxx'=>$this->padrexxx->id]);
       
        $this->getPestanias([]);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
