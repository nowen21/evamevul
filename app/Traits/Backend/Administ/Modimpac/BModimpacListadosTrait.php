<?php

namespace App\Traits\Backend\Administ\Modimpac;

use App\Models\Backend\Impactox\Impacto;
use App\Models\Backend\Impactox\Impanive;
use Illuminate\Http\Request;


/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait BModimpacListadosTrait
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

    


    public function getRequestx($requestx)
    {
        $requestx->request->add([
            'botonesx' => $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi',
            'estadoxx' => $this->opciones['rutacarp'] .
            $this->opciones['carpetax'] . 'botones.estadosx'
        ]);
        return $requestx;
    }


    public function getBImpactos(Request $requestx)
    {

        if ($requestx->ajax()) {
            $requestx = $this->getRequestx($requestx);
            $requestx->routexxx = [$this->opciones['permisox'], 'impanive'];
            $dataxxxx =  Impacto::select([
                'id',
                'impacto',
            ]);
            return $this->getDt($dataxxxx, $requestx);
        }
    }

    public function getBImpanives(Request $requestx,$padrexxx)
    {

        if ($requestx->ajax()) {
            $requestx = $this->getRequestx($requestx);
            $requestx->routexxx = [$this->opciones['permisox'], 'impanive'];
            $dataxxxx =  Impanive::select([
                'impanives.id',
                'impactos.impacto',
                'impanives.impanive',
                'nivels.nivel'
            ])
            ->join('impactos','impanives.impacto_id','=','impactos.id')
            ->join('nivels','impanives.nivel_id','=','nivels.id')
            ->where('impanives.impacto_id',$padrexxx)
            ;
            return $this->getDt($dataxxxx, $requestx);
        }
    }

   
}
