<?php

namespace App\Traits\Backend\Administ;

use App\Models\Acceacto;
use App\Models\Acceso;
use App\Models\Actiacce;
use App\Models\Activo;
use App\Models\Actomoti;
use App\Models\Actor;
use App\Models\Backend\Administ\Probabil\Resuprob;
use App\Models\Backend\Impactox\Resuimpa;
use App\Models\Detatabl;
use App\Models\Motiresu;
use App\Models\Motivo;
use App\Models\Resultad;
use Illuminate\Http\Request;


/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait BAdministListadosTrait
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



    public function getBActivos(Request $requestx)
    {

        if ($requestx->ajax()) {
            $requestx=$this->getRequestx($requestx);
            $requestx->routexxx = [$this->opciones['permisox'], 'actiacce'];
            $dataxxxx =  Activo::select([
                'id',
                'activo',
            ]);
            return $this->getDt($dataxxxx, $requestx);
        }
    }

    public function getBAccesos(Request $requestx)
    {

        if ($requestx->ajax()) {
            $requestx=$this->getRequestx($requestx);
            $requestx->routexxx = [$this->opciones['permisox'], 'comboxxx'];
            $dataxxxx =  Acceso::select([
                'id',
                'acceso',
            ]);
            return $this->getDt($dataxxxx, $requestx);
        }
    }

    public function getBActores(Request $requestx)
    {

        if ($requestx->ajax()) {
            $requestx=$this->getRequestx($requestx);
            $requestx->routexxx = [$this->opciones['permisox'], 'comboxxx'];
            $dataxxxx =  Actor::select([
                'id',
                'actor',
            ]);
            return $this->getDt($dataxxxx, $requestx);
        }
    }

    public function getBMotivos(Request $requestx)
    {

        if ($requestx->ajax()) {
            $requestx=$this->getRequestx($requestx);
            $requestx->routexxx = [$this->opciones['permisox'], 'comboxxx'];
            $dataxxxx =  Motivo::select([
                'id',
                'motivo',
            ]);
            return $this->getDt($dataxxxx, $requestx);
        }
    }
    public function getBResultads(Request $requestx)
    {

        if ($requestx->ajax()) {
            $requestx=$this->getRequestx($requestx);
            $requestx->routexxx = [$this->opciones['permisox'], 'comboxxx'];
            $dataxxxx =  Resultad::select([
                'id',
                'resultad',
            ]);
            return $this->getDt($dataxxxx, $requestx);
        }
    }

    public function getBActiacces(Request $requestx,$padrexxx)
    {

        if ($requestx->ajax()) {
            $requestx=$this->getRequestx($requestx);
            $requestx->routexxx = [$this->opciones['permisox'], 'acceacto'];
            $dataxxxx =  Actiacce::select([
                'actiacces.id',
                'acceso',
            ])
            ->join('accesos','actiacces.acceso_id','=','accesos.id')
            ->where('actiacces.activo_id',$padrexxx);
            return $this->getDt($dataxxxx, $requestx);
        }
    }

    public function getBAcceactos(Request $requestx,$padrexxx)
    {

        if ($requestx->ajax()) {
            $requestx=$this->getRequestx($requestx);
            $requestx->routexxx = [$this->opciones['permisox'], 'actomoti'];
            $dataxxxx =  Acceacto::select([
                'acceactos.id',
                'actor',
            ])
            ->join('actors','acceactos.actor_id','=','actors.id')
            ->where('acceactos.actiacce_id',$padrexxx);
            return $this->getDt($dataxxxx, $requestx);
        }
    }
    
    public function getBActimotis(Request $requestx,$padrexxx)
    {

        if ($requestx->ajax()) {
            $requestx=$this->getRequestx($requestx);
            $requestx->routexxx = [$this->opciones['permisox'], 'motiresu'];
            $dataxxxx =  Actomoti::select([
                'actomotis.id',
                'motivo',
            ])
            ->join('motivos','actomotis.motivo_id','=','motivos.id')
            ->where('actomotis.acceacto_id',$padrexxx);
            return $this->getDt($dataxxxx, $requestx);
        }
    }

    public function getBMotiresus(Request $requestx,$padrexxx)
    {

        if ($requestx->ajax()) {
            $requestx=$this->getRequestx($requestx);
            $requestx->routexxx = [$this->opciones['permisox'], 'resuimpa', 'resuprob'];
            $dataxxxx =  Motiresu::select([
                'motiresus.id',
                'resultad',
            ])
            ->join('resultads','motiresus.resultad_id','=','resultads.id')
            ->where('motiresus.actomoti_id',$padrexxx);
            return $this->getDt($dataxxxx, $requestx);
        }
    }
    
    public function getBResuimpas(Request $requestx,$padrexxx)
    {

        if ($requestx->ajax()) {
            $requestx=$this->getRequestx($requestx);
            $requestx->routexxx = [$this->opciones['permisox'], 'comboxxx'];
            $dataxxxx =  Resuimpa::select([
                'resuimpas.id',
                'impacto',
                'nivel',
                'impanive'
            ])
            ->join('motiresus','resuimpas.motiresu_id','=','motiresus.id')
            ->join('impanives','resuimpas.impanive_id','=','impanives.id')
            ->join('impactos','impanives.impacto_id','=','impactos.id')
            ->join('nivels','impanives.nivel_id','=','nivels.id')
            ->where('resuimpas.motiresu_id',$padrexxx);
            return $this->getDt($dataxxxx, $requestx);
        }
    }

    public function getBResuprobs(Request $requestx,$padrexxx)
    {

        if ($requestx->ajax()) {
            $requestx=$this->getRequestx($requestx);
            $requestx->routexxx = [$this->opciones['permisox'], 'comboxxx'];
            $dataxxxx =  Resuprob::select([
                'resuprobs.id',
                'nivels.nivel',
               'tipoprobs.tipoprob',
                'probabils.probabil'
            ])
            ->join('motiresus','resuprobs.motiresu_id','=','motiresus.id')
            ->join('probabils','resuprobs.probabil_id','=','probabils.id')
            ->join('tipoprobs','probabils.tipoprob_id','=','tipoprobs.id')
            ->join('nivels','probabils.nivel_id','=','nivels.id')
            ->where('resuprobs.motiresu_id',$padrexxx);
            return $this->getDt($dataxxxx, $requestx);
        }
    }
    
}

