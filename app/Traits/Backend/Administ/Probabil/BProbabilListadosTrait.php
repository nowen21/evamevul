<?php

namespace App\Traits\Backend\Administ\Probabil;

use App\Models\Backend\Administ\Probabil\Consecue;
use App\Models\Backend\Administ\Probabil\Consprob;
use App\Models\Backend\Administ\Probabil\Probabil;
use App\Models\Backend\Administ\Probabil\Tconsecu;
use App\Models\Backend\Administ\Probabil\Tipoprob;
use Illuminate\Http\Request;


/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait BProbabilListadosTrait
{
    public  function getDt($queryxxx, $requestx)
    {
        return datatables()
            ->of($queryxxx)
            ->addColumn(
                'botonexx',
                function ($queryxxx) use ($requestx) {
                    /**
                     * validaciones para los permisos
                     */

                    return  view($requestx->botonesx, [
                        'queryxxx' => (object)$queryxxx,
                        'requestx' => $requestx,
                    ]);
                }
            )
            ->addColumn(
                's_estado',
                function ($queryxxx) use ($requestx) {
                    return 'hol';
                    // return  view($requestx->estadoxx, [
                    //     'queryxxx' => $queryxxx,
                    //     'requestx' => $requestx,
                    // ]);
                }

            )
            ->rawColumns(['botonexx', 's_estado'])
            ->toJson();
    }

    public  function getDtWelcomex($queryxxx, $requestx)
    {
        return datatables()
            ->of($queryxxx)
            ->toJson();
    }


    public function getRequestx($requestx)
    {
        $requestx->request->add([
            'botonesx' => $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi',
            'estadoxx' => $this->opciones['rutacomp'] . 'botones.estadosx'
        ]);
        return $requestx;
    }



    public function getBTconsecus(Request $requestx)
    {

        if ($requestx->ajax()) {
            $requestx = $this->getRequestx($requestx);
            $requestx->routexxx = [$this->opciones['permisox'], 'comboxxx'];
            $dataxxxx =  Tconsecu::select([
                'id',
                'tconsecu',
            ]);
            return $this->getDt($dataxxxx, $requestx);
        }
    }

    public function getBConsecues(Request $requestx, $padrexxx)
    {
        if ($requestx->ajax()) {
            $requestx = $this->getRequestx($requestx);
            $requestx->routexxx = [$this->opciones['permisox'], 'comboxxx'];
            $dataxxxx =  Consecue::select([
                'consecues.id',
                'consecue',
                'tconsecu'
            ])
                ->join('tconsecus', 'consecues.tconsecu_id', '=', 'tconsecus.id')
                ->where('tconsecu_id', $padrexxx);

            return $this->getDt($dataxxxx, $requestx);
        }
    }

    public function getBTipoprobs(Request $requestx)
    {

        if ($requestx->ajax()) {
            $requestx = $this->getRequestx($requestx);
            $requestx->routexxx = [$this->opciones['permisox'], 'comboxxx'];
            $dataxxxx =  Tipoprob::select([
                'id',
                'tipoprob',
            ]);
            return $this->getDt($dataxxxx, $requestx);
        }
    }

    public function getBProbabils(Request $requestx, $padrexxx)
    {
        if ($requestx->ajax()) {
            $requestx = $this->getRequestx($requestx);
            $requestx->routexxx = [$this->opciones['permisox'], 'comboxxx'];
            $dataxxxx =  Probabil::select([
                'probabils.id',
                'tipoprob',
                'nivel'
            ])
                ->join('nivels', 'probabils.nivel_id', '=', 'nivels.id')
                ->join('tipoprobs', 'probabils.tipoprob_id', '=', 'tipoprobs.id')
                ->where('tipoprob_id', $padrexxx);

            return $this->getDt($dataxxxx, $requestx);
        }
    }

    public function getBConsprobs(Request $requestx)
    {
        if ($requestx->ajax()) {
            $requestx = $this->getRequestx($requestx);
            $requestx->routexxx = [$this->opciones['permisox'], 'comboxxx'];
            $dataxxxx =  Consprob::select([
                'consprobs.id',
                'tipoprob',
                'tconsecu',
                'consecue',
                'nivel',
            ])
                ->join('consecues', 'consprobs.consecue_id', '=', 'consecues.id')
                ->join('tconsecus', 'consecues.tconsecu_id', '=', 'tconsecus.id')
                ->join('probabils', 'consprobs.probabil_id', '=', 'probabils.id')
                ->join('nivels', 'probabils.nivel_id', '=', 'nivels.id')
                ->join('tipoprobs', 'probabils.tipoprob_id', '=', 'tipoprobs.id');


            return $this->getDt($dataxxxx, $requestx);
        }
    }
}
