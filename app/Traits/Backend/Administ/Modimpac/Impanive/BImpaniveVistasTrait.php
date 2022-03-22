<?php

namespace App\Traits\Backend\Administ\Modimpac\Impanive;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait BImpaniveVistasTrait
{
    public function getParamPesta()
    {
        $this->pestania[1][2] = [$this->padrexxx->id];
    }
    public function view()
    {
        $wherenot = [];
        foreach ($this->padrexxx->impanives as $key => $value) {
            $wherenot[] = $value->nivel_id;
        }
        $this->opciones['impactox']=$this->padrexxx->impacto;
        $this->getParamPesta();
        $this->getVista() ;
        $this->getRespuesta(['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER', 'parametr' => [$this->padrexxx->id]]);
        // indica si se esta actualizando o viendo 
        $selectid = 0;
        if (!is_null($this->opciones['modeloxx'])) {
            $selectid = $this->opciones['modeloxx']->nivel_id;
            $this->getRespuesta(['btnxxxxx' => 'a', 'tituloxx' => 'NUEVO REGISTRO', $this->opciones['modeloxx'] . '.nuevoxxx', 'parametr' => [$this->padrexxx->id]]);
            $this->opciones['parametr']=[$this->opciones['modeloxx']->id];
        }
        $this->opciones['nivelxxx'] = $this->getNivelCT(['selectid' => $selectid,'wherenot'=> $wherenot]);
        $this->getPestanias([]);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['pestanix'], ['todoxxxx' => $this->opciones]);
    }
}
