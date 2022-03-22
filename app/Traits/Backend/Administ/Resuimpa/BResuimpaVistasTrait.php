<?php

namespace App\Traits\Backend\Administ\Resuimpa;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait BResuimpaVistasTrait
{
    public function getParamPesta($padrexxx)
    {
        $this->pestania[5][4] = true;
        $this->pestania[6][4] = true;
        $this->pestania[7][4] = true;
        $this->pestania[8][4] = true;
        $this->pestania[9][4] = true;
        $this->pestania[10][4] = true;
        $this->pestania[5][2] = [$padrexxx->actomoti->acceacto->actiacce->activo_id];
        $this->pestania[6][2] = [$padrexxx->actomoti->acceacto->actiacce_id];
        $this->pestania[7][2] = [$padrexxx->actomoti->acceacto_id];
        $this->pestania[8][2] = [$padrexxx->actomoti_id];
        $this->pestania[9][2] = [$padrexxx->id];
        $this->pestania[10][2] = [$padrexxx->id];
    }
    public function view()
    {
        $this->getParamPesta($this->padrexxx);
        $this->getVista();

        $this->getRespuesta(['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER IMPACTOS', 'parametr' => [$this->padrexxx->id]]);
        $selectid = 0;
        // indica si se esta actualizando o viendo 
        if (!is_null($this->opciones['modeloxx'])) {
            $this->opciones['parametr'] = [$this->opciones['modeloxx']->id];
            $impanive=$this->opciones['modeloxx']->impanive;
            $this->opciones['modeloxx']->impacto_id=$selectid = $impanive->impacto_id;
            $this->opciones['modeloxx']->nivel_id= $impanive->nivel_id;
        }
   
        $this->opciones['impactox'] = $this->getImpactoCT(['selectid' => $selectid, 'padrexxx' => $this->padrexxx->id]);
        $this->opciones['nivelxxx'] = $this->getNivelCT(['wherenot'=>[1],'selectid' =>0]);
        $this->getPestanias([]);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
