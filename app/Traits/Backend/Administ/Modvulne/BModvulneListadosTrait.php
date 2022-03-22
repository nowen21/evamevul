<?php

namespace App\Traits\Backend\Administ\Modvulne;

use App\Models\Activo;
use App\Models\Backend\Administ\Modvulne\Actoherr;
use App\Models\Backend\Administ\Modvulne\Herramie;
use App\Models\Backend\Administ\Modvulne\Vulnacto;
use App\Models\Backend\Administ\Modvulne\Vulnerab;
use App\Models\Backend\Administ\Probabil\Tconsecu;
use Illuminate\Http\Request;


/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait BModvulneListadosTrait
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



    public function getBVulnactis(Request $requestx)
    {

        if ($requestx->ajax()) {
            $requestx = $this->getRequestx($requestx);
            $requestx->routexxx = [$this->opciones['permisox'], 'vulnerab'];
            $dataxxxx =  Activo::select([
                'id',
                'activo',
            ]);
            return $this->getDt($dataxxxx, $requestx);
        }
    }

    public function getBHerramies(Request $requestx)
    {

        if ($requestx->ajax()) {
            $requestx = $this->getRequestx($requestx);
            $requestx->routexxx = [$this->opciones['permisox'], 'vulnerab'];
            $dataxxxx =  Herramie::select([
                'id',
                'herramie',
            ]);
            return $this->getDt($dataxxxx, $requestx);
        }
    }
    
    public function getBVulnerabs(Request $requestx,$padrexxx)
    {

        if ($requestx->ajax()) {
            $requestx = $this->getRequestx($requestx);
            $requestx->routexxx = [$this->opciones['permisox'], 'vulnerab'];
            $dataxxxx =  Vulnerab::select([
                'id',
                'vulnerab',
            ])
            ->where('activo_id',$padrexxx)
            ;
            return $this->getDt($dataxxxx, $requestx);
        }
    }
    
    public function getBVulnactos(Request $requestx,$padrexxx)
    {

        if ($requestx->ajax()) {
            $requestx = $this->getRequestx($requestx);
            $requestx->routexxx = [$this->opciones['permisox'], 'vulnerab'];
            $dataxxxx =  Vulnacto::select([
                'vulnactos.id',
                'vulnerabs.vulnerab',
                'actors.actor',
            ])
            ->join('actors','vulnactos.actor_id','=','actors.id')
            ->join('vulnerabs','vulnactos.vulnerab_id','=','vulnerabs.id')
            ->orderBy('vulnactos.id', 'asc')
            ->where('vulnactos.vulnerab_id',$padrexxx)
            ;
            return $this->getDt($dataxxxx, $requestx);
        }
    }
    
    public function getBActoherrs(Request $requestx,$padrexxx)
    {

        if ($requestx->ajax()) {
            $requestx = $this->getRequestx($requestx);
            $requestx->routexxx = [$this->opciones['permisox'], 'vulnerab'];
            $dataxxxx =  Actoherr::select([
                'actoherrs.id',
                'vulnerabs.vulnerab',
                'herramies.herramie',
                'actors.actor',
            ])
            ->join('herramies','actoherrs.herramie_id','=','herramies.id')
            ->join('vulnactos','actoherrs.vulnacto_id','=','vulnactos.id')
            ->join('actors','vulnactos.actor_id','=','actors.id')
            ->join('vulnerabs','vulnactos.vulnerab_id','=','vulnerabs.id')
            ->orderBy('actoherrs.id', 'asc')
            ->where('actoherrs.vulnacto_id',$padrexxx)
            ;
            return $this->getDt($dataxxxx, $requestx);
        }
    }
    
}
