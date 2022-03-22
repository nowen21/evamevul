<?php

namespace App\Traits\Frontend\Welcomex;

use App\Models\Backend\Administ\Modvulne\Vulnerab;
use App\Models\Backend\Administ\Probabil\Probimpa;
use App\Models\Backend\Administ\Probabil\Probsuma;
use App\Models\Backend\Administ\Probabil\Resuprob;
use App\Models\Backend\Impactox\Impasuma;
use App\Models\Backend\Impactox\Resuimpa;
use App\Models\Motiresu;
use Illuminate\Http\Request;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait FWelcomexAjaxTrait
{
    public function getVulnerabFWA($requestx, $activoxx)
    {
        if ($requestx->herramie == 0) {
            $requestx->activoxx = 0;
        }
        if ($requestx->herramie > 0) {
            $requestx->activoxx = $activoxx;
        }
        $dataxxxx = Vulnerab::join('activos', 'vulnerabs.activo_id', '=', 'activos.id')
            ->join('vulnactos', 'vulnerabs.id', '=', 'vulnactos.vulnerab_id')
            ->join('actoherrs', 'vulnactos.id', '=', 'actoherrs.vulnacto_id')
            ->join('actors', 'vulnactos.actor_id', '=', 'actors.id')
            ->join('herramies', 'actoherrs.herramie_id', '=', 'herramies.id')
            ->where(function ($queryxxx) use ($requestx) {

                $queryxxx->where('activos.id',  $requestx->activoxx);

                if ($requestx->vulnerab > 0) {
                    $queryxxx->where('vulnactos.vulnerab_id',  $requestx->vulnerab);
                }
                if ($requestx->actovuln > 0) {
                    $queryxxx->where('vulnactos.id',  $requestx->actovuln);
                }

                if ($requestx->herramie > 0) {
                    $queryxxx->where('herramies.id',  $requestx->herramie);
                }
            })->orderBy('id', 'ASC')
            ->get(['vulnerabs.id', 'activos.activo', 'vulnerabs.vulnerab', 'actors.actor', 'herramies.herramie']);
        return $dataxxxx;
    }
    public function getActivos(Request $requestx)
    {
        $activoxx = $requestx->activoxx;
        $dataxxxx =  Motiresu::select([
            "motiresus.id",
            "activo",
            "acceso",
            "actor",
            "motivo",
            "resultad",
        ])
            ->join('resultads', 'motiresus.resultad_id', '=', 'resultads.id')
            ->join('actomotis', 'motiresus.actomoti_id', '=', 'actomotis.id')
            ->join('motivos', 'actomotis.motivo_id', '=', 'motivos.id')
            ->join('acceactos', 'actomotis.acceacto_id', '=', 'acceactos.id')
            ->join('actors', 'acceactos.actor_id', '=', 'actors.id')
            ->join('actiacces', 'acceactos.actiacce_id', '=', 'actiacces.id')
            ->join('accesos', 'actiacces.acceso_id', '=', 'accesos.id')
            ->join('activos', 'actiacces.activo_id', '=', 'activos.id')
            ->where(function ($queryxxx) use ($requestx) {
                if ($requestx->motivoxx == 0) {
                    $requestx->activoxx = 0;
                }
                $queryxxx->where('activos.id',  $requestx->activoxx);
                if ($requestx->accesoxx > 0) {
                    $queryxxx->where('accesos.id',  $requestx->accesoxx);
                }

                if ($requestx->actorxxx > 0) {
                    $queryxxx->where('actors.id',  $requestx->actorxxx);
                }

                if ($requestx->motivoxx > 0) {
                    $queryxxx->where('motivos.id',  $requestx->motivoxx);
                }
            })->orderBy('id', 'ASC')->get();
        foreach ($dataxxxx as $key => $value) {

            $impactox =  Impasuma::where('motiresu_id', $value->id)->first();
            $probabil =  Probsuma::where('motiresu_id', $value->id)->first();
            $probimpa =  Probimpa::where('motiresu_id', $value->id)->first();

            $dataxxxx[$key]['impactox'] = '';
            if (isset($impactox->id)) {
                $dataxxxx[$key]['impactox'] = $impactox->nivel->nivel.' = '.$impactox->totaimpa;
            }

            if (isset($probabil->id)) {
                $dataxxxx[$key]['probabil'] = $probabil->nivel->nivel.' = '.$probabil->totaprob;
            }

            if (isset($probimpa->id)) {
                $dataxxxx[$key]['probimpa'] = $probimpa->nivel->nivel.' = '.$probimpa->riesgoxx;
                $dataxxxx[$key]['metodoxx'] = $probimpa->metodo->metodo;
            }
        }

        $dataxxxx = [
            'dataxxxx' => $dataxxxx,
            'vulnerab' => $this->getVulnerabFWA($requestx, $activoxx),
            'combosxx' => [
                [
                    'comboxxx' => $this->getAccesosCT(['ajaxxxxx' => true, 'padrexxx' => $activoxx, 'selected' => [$requestx->accesoxx]]),
                    'idxxxxxx' => '#acceso_id',
                ],
                [
                    'comboxxx' => $this->getActoresCT(
                        [
                            'ajaxxxxx' => true,
                            'activoxx' => $activoxx,
                            'accesoxx' => $requestx->accesoxx,
                            'selected' => [$requestx->actorxxx]
                        ]
                    ),
                    'idxxxxxx' => '#actor_id',
                ],
                [
                    'comboxxx' => $this->getMotivosCT(
                        [
                            'ajaxxxxx' => true,
                            'activoxx' => $activoxx,
                            'accesoxx' => $requestx->accesoxx,
                            'actorxxx' => $requestx->actorxxx,
                            'selected' => [$requestx->motivoxx]
                        ]
                    ),
                    'idxxxxxx' => '#motivo_id',
                ],
                [
                    'comboxxx' => $this->getVulnerabCT(
                        [
                            'ajaxxxxx' => true,
                            'selected' => [$requestx->vulnerab],
                            'padrexxx' => $activoxx,
                        ]
                    ),
                    'idxxxxxx' => '#vulnerab_id',
                ],
                [
                    'comboxxx' =>
                    $this->getVulenerabActorCT(
                        [
                            'ajaxxxxx' => true,
                            'selected' => [$requestx->actovuln],
                            'vulnerab' => $requestx->vulnerab
                        ]
                    ),
                    'idxxxxxx' => '#actovuln_id',
                ],

                [
                    'comboxxx' =>
                    $this->getActorHerramientaCT(
                        [
                            'ajaxxxxx' => true,
                            'selected' => [$requestx->herramie],
                            'vulnacto' => $requestx->actovuln
                        ]
                    ),
                    'idxxxxxx' => '#herramie_id',
                ],
            ],
            'emptyxxx' => '#acceso_id,#actor_id,#motivo_id,#vulnerab_id,#actovuln_id,#herramie_id'
        ];

        return response()->json($dataxxxx);
    }




    public function getImpactosAjax(Request $requestx)
    {

        $dataxxxx =  Resuimpa::select([
            "resuimpas.id",
            "nivels.nivel",
            "impanives.impanive",
            'impactos.impacto',
        ])
            ->join('impanives', 'impanive_id', '=', 'impanives.id')
            ->join('nivels', 'impanives.nivel_id', '=', 'nivels.id')
            ->join('impactos', 'impanives.impacto_id', '=', 'impactos.id')
            ->where(function ($queryxxx) use ($requestx) {
                $queryxxx->where('motiresu_id', $requestx->motiresu);
            })->orderBy('id', 'ASC')->get();
        $dataxxxx = [
            'dataxxxx' => $dataxxxx,
        ];
        return response()->json($dataxxxx);
    }

    public function getProbabilAjax(Request $requestx)
    {

        $dataxxxx =  Resuprob::select([
            "resuprobs.id",
            "nivels.nivel",
            'tipoprobs.tipoprob',
            'probabils.probabil'
        ])
            ->join('probabils', 'resuprobs.probabil_id', '=', 'probabils.id')
            ->join('nivels', 'probabils.nivel_id', '=', 'nivels.id')
            ->join('tipoprobs', 'probabils.tipoprob_id', '=', 'tipoprobs.id')
            ->where(function ($queryxxx) use ($requestx) {
                $queryxxx->where('motiresu_id', $requestx->motiresu);
            })->orderBy('id', 'ASC')->get();
        $dataxxxx = [
            'dataxxxx' => $dataxxxx,
        ];
        return response()->json($dataxxxx);
    }
}
