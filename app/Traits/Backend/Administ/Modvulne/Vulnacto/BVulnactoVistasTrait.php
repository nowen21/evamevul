<?php

namespace App\Traits\Backend\Administ\Modvulne\Vulnacto;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait BVulnactoVistasTrait
{
    public function getParamPesta()
    {
        $this->pestania[2][4] = true;
        $this->pestania[2][2] = [$this->padrexxx->activo_id];
        $this->pestania[3][2] = [$this->padrexxx->id];
    }
    public function view()
    {
        $this->getParamPesta();
        $this->getVista();
        $this->getRespuesta(['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER', 'parametr' => [$this->padrexxx->id]]);
        // indica si se esta actualizando o viendo 
        $selectid=0;
        if (!is_null($this->opciones['modeloxx'])) {
            $this->getRespuesta(['btnxxxxx' => 'a', 'tituloxx' => 'NUEVO REGISTRO', 'routexxx' => $this->opciones['permisox'] . '.nuevoxxx', 'parametr' => [$this->padrexxx->id]]);
            $this->pestania[4][4] = true;
            $this->pestania[4][2] = [$this->opciones['modeloxx']->id];
            $this->opciones['parametr'] = [$this->opciones['modeloxx']->id];
            $selectid=$this->opciones['modeloxx']->actor_id;
        }
        $this->opciones['actorxxx']=$this->getActorCT(['selectid'=>$selectid,'padrexxx'=>$this->padrexxx->id]);
        $this->getPestanias([]);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacomp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
