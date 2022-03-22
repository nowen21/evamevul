<?php

namespace App\Traits\Frontend\Welcomex;

use App\Models\Activo;
use App\Models\Backend\Impactox\Impasuma;
use App\Models\Detatabl;
use App\Models\Motiresu;
use Illuminate\Http\Request;


/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait FWelcomexListadosTrait
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



    public function getListaxxx(Request $requestx)
    {

        if ($requestx->ajax()) {;
            // $requestx = $this->getRequestx($requestx);
            $requestx->request->add([
                'routexxx' => [$this->opciones['permisox'],  'indiliba'],
            ]);

            $queryxxx = Activo::select([
                "motiresus.id",
                "activo",
                "acceso",
                "actor",
                "motivo",
                "resultad",
            ])
                ->join('actiacces', 'activos.id', '=', 'actiacces.activo_id')
                ->join('accesos', 'actiacces.acceso_id', '=', 'accesos.id')

                ->join('acceactos', 'actiacces.id', '=', 'acceactos.actiacce_id')
                ->join('actors', 'acceactos.actor_id', '=', 'actors.id')

                ->join('actomotis', 'acceactos.id', '=', 'actomotis.acceacto_id')
                ->join('motivos', 'actomotis.motivo_id', '=', 'motivos.id')

                ->join('motiresus', 'acceactos.id', '=', 'motiresus.actomoti_id')

                ->join('resultads', 'motiresus.resultad_id', '=', 'resultads.id')
                ->where(function ($queryxxx) use ($requestx) {
                    if ($requestx->activoxx > 0) {
                        $queryxxx->where('activos.id',  $requestx->activoxx);
                    }
                });

            return $this->getDtWelcomex($queryxxx, $requestx);
        }
    }

   
}
