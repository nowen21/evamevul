<?php

namespace App\Traits\Frontend\Welcomex;

/**
 * Este trait permite el crear y editar del acta de encuetro
 */
trait FWelcomexCrudTrait
{
    /**
     * grabar o actualizar el acta de encuentro
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function setTablRete($datapxxx)
    {
        $parametr = [
            'idxxxxxx'=>0,
            'nombtare' => $this->requestx->nomb_tare,
            'feintare' => $this->requestx->fein_tare,
            'fefitare' => $this->requestx->fefi_tare,
            'estadoxx' => 'AC'
        ];
        
        if (!is_null($this->idxxxxxx)) {
            $parametr['idxxxxxx']=$this->idxxxxxx;
        } 
        $dataxxxx = [
            'metodoxx'=>'POST',
            'urlxxxxx' => '/tablrete/guardar',
            'parametr' => $parametr
        ];
        return redirect()
            ->route($datapxxx['permisox'], [$this->getConGuzzRequest($dataxxxx)['idxxxxxx']])
            ->with('info', $datapxxx['infoxxxx']);
    }
}
