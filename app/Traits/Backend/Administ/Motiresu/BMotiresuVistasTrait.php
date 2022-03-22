<?php

namespace App\Traits\Backend\Administ\Motiresu;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait BMotiresuVistasTrait
{
    public function getParamPesta($padrexxx)
    {
        $this->pestania[5][2] = [$padrexxx->acceacto->actiacce->activo_id];
        $this->pestania[6][2] = [$padrexxx->acceacto->actiacce_id];
        $this->pestania[7][2] = [$padrexxx->acceacto_id];
        $this->pestania[8][2] = [$padrexxx->id];
    }
    public function view()
    {
        $this->getParamPesta($this->padrexxx);
        $this->getVista();

        $this->getRespuesta(['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER MOTIVOS', 'parametr' => [$this->padrexxx->id]]);
        $selectid = 0;
        // indica si se esta actualizando o viendo 
        if (!is_null($this->opciones['modeloxx'])) {
            $this->opciones['parametr'] = [$this->opciones['modeloxx']->id];
            $selectid = $this->opciones['modeloxx']->resultad_id;
        }
        $this->opciones['motiresu'] = $this->getMotiresuCT(['selectid' => $selectid, 'padrexxx' => $this->padrexxx->id]);
        $this->getPestanias([]);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
