<?php

namespace App\Traits\Combos;

use App\Models\Acceacto;
use App\Models\Acceso;
use App\Models\Actiacce;
use App\Models\Activo;
use App\Models\Actomoti;
use App\Models\Actor;
use App\Models\Backend\Administ\Modvulne\Actoherr;
use App\Models\Backend\Administ\Modvulne\Herramie;
use App\Models\Backend\Administ\Modvulne\Vulnacto;
use App\Models\Backend\Administ\Modvulne\Vulnerab;
use App\Models\Backend\Administ\Probabil\Probabil;
use App\Models\Backend\Administ\Probabil\Resuprob;
use App\Models\Backend\Administ\Probabil\Tipoprob;
use App\Models\Backend\Impactox\Impacto;
use App\Models\Backend\Impactox\Nivel;
use App\Models\Backend\Impactox\Resuimpa;
use App\Models\Motiresu;
use App\Models\Motivo;
use App\Models\Resultad;

trait CombosTrait
{
    public function getCampoCT($dataxxxx, $campoxxx)
    {
        if (!isset($dataxxxx['campoxxx'])) {
            $dataxxxx['campoxxx'] = $campoxxx;
        }
        return $dataxxxx;
    }

    public function getDefaultCT($dataxxxx)
    {
        if (!isset($dataxxxx['orderxxx'])) {
            $dataxxxx['orderxxx'] = 'ASC';
        }
        if (!isset($dataxxxx['cabecera'])) {
            $dataxxxx['cabecera'] = true;
        }
        if (!isset($dataxxxx['ajaxxxxx'])) {
            $dataxxxx['ajaxxxxx'] = false;
        }
        if (!isset($dataxxxx['selected'])) {
            $dataxxxx['selected'] = [];
        }
        return $dataxxxx;
    }

    public function getCabecera($dataxxxx)
    {
        $comboxxx = [];
        if ($dataxxxx['cabecera']) {
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
            } else {
                $comboxxx = ['' => 'Seleccione'];
            }
        }
        return $comboxxx;
    }

    public function getCuerpoComboCT($dataxxxx)
    {

        $comboxxx = $this->getCabecera($dataxxxx);
        foreach ($dataxxxx['dataxxxx'] as $registro) {
            if ($dataxxxx['ajaxxxxx']) {
                $selected = '';
                if (in_array($registro->valuexxx, $dataxxxx['selected'])) {
                    $selected = 'selected';
                }
                $comboxxx[] = ['valuexxx' => $registro->valuexxx, 'optionxx' => strtoupper($registro->optionxx), 'selected' => $selected];
            } else {
                $comboxxx[$registro->valuexxx] = strtoupper($registro->optionxx);
            }
        }
        return $comboxxx;
    }

    public function getCuerpoProbabilComboCT($dataxxxx)
    {

        $comboxxx = $this->getCabecera($dataxxxx);
        foreach ($dataxxxx['dataxxxx'] as $registro) {
            $optionxx = strtoupper($registro->optionxz) . ' - ' . strtoupper($registro->optionxx);
            if ($dataxxxx['ajaxxxxx']) {
                $selected = '';
                if (in_array($registro->valuexxx, $dataxxxx['selected'])) {
                    $selected = 'selected';
                }
                $comboxxx[] = ['valuexxx' => $registro->valuexxx, 'optionxx' => $optionxx, 'selected' => $selected];
            } else {
                $comboxxx[$registro->valuexxx] = $optionxx;
            }
        }
        return $comboxxx;
    }



    /**
     * listado de municipios del departamento
     *
     * @param array $dataxxxx
     * @return array $respuest
     */
    public function getActivosCT($dataxxxx)
    {
        $dataxxxx = $this->getDefaultCT($dataxxxx);
        $dataxxxx['dataxxxx'] = Activo::select('activo as optionxx', 'id as valuexxx')
            ->where(function ($queryxxx) use ($dataxxxx) {
                if (isset($dataxxxx['whereinx']) && count($dataxxxx['whereinx'])) {
                    $queryxxx->whereIN('id', $dataxxxx['whereinx']);
                }
                if (isset($dataxxxx['wherenot']) && count($dataxxxx['wherenot'])) {
                    $queryxxx->whereNotIn('id', $dataxxxx['wherenot']);
                }
            })
            ->get();
        $respuest = $this->getCuerpoComboCT($dataxxxx);
        return $respuest;
    }

    public function getAccesosCT($dataxxxx)
    {
        $dataxxxx = $this->getDefaultCT($dataxxxx);
        $dataxxxx['dataxxxx'] = Actiacce::select('accesos.acceso as optionxx', 'accesos.id as valuexxx')
            ->join('accesos', 'actiacces.acceso_id', '=', 'accesos.id')
            ->where(function ($queryxxx) use ($dataxxxx) {
                if (isset($dataxxxx['whereinx']) && count($dataxxxx['whereinx'])) {
                    $queryxxx->whereIN('id', $dataxxxx['whereinx']);
                }
                if (isset($dataxxxx['wherenot']) && count($dataxxxx['wherenot'])) {
                    $queryxxx->whereNotIn('id', $dataxxxx['wherenot']);
                }
                $queryxxx->where('activo_id', $dataxxxx['padrexxx']);
            })
            ->get();
        $respuest = $this->getCuerpoComboCT($dataxxxx);
        return $respuest;
    }

    public function getActoresCT($dataxxxx)
    {
        $dataxxxx = $this->getDefaultCT($dataxxxx);
        $dataxxxx['dataxxxx'] = Acceacto::select('actors.actor as optionxx', 'actors.id as valuexxx')
            ->join('actors', 'acceactos.actor_id', '=', 'actors.id')
            ->join('actiacces', 'acceactos.actiacce_id', '=', 'actiacces.id')

            ->where(function ($queryxxx) use ($dataxxxx) {
                if (isset($dataxxxx['whereinx']) && count($dataxxxx['whereinx'])) {
                    $queryxxx->whereIN('id', $dataxxxx['whereinx']);
                }
                if (isset($dataxxxx['wherenot']) && count($dataxxxx['wherenot'])) {
                    $queryxxx->whereNotIn('id', $dataxxxx['wherenot']);
                }
                $queryxxx->where('activo_id', $dataxxxx['activoxx']);
                $queryxxx->where('acceso_id', $dataxxxx['accesoxx']);
            })
            ->get();
        $respuest = $this->getCuerpoComboCT($dataxxxx);
        return $respuest;
    }


    public function getMotivosCT($dataxxxx)
    {
        $dataxxxx = $this->getDefaultCT($dataxxxx);
        $dataxxxx['dataxxxx'] = Actomoti::select('motivos.motivo as optionxx', 'motivos.id as valuexxx')
            ->join('motivos', 'actomotis.motivo_id', '=', 'motivos.id')
            ->join('acceactos', 'actomotis.acceacto_id', '=', 'acceactos.id')
            ->join('actiacces', 'acceactos.actiacce_id', '=', 'actiacces.id')

            ->where(function ($queryxxx) use ($dataxxxx) {
                if (isset($dataxxxx['whereinx']) && count($dataxxxx['whereinx'])) {
                    $queryxxx->whereIN('id', $dataxxxx['whereinx']);
                }
                if (isset($dataxxxx['wherenot']) && count($dataxxxx['wherenot'])) {
                    $queryxxx->whereNotIn('id', $dataxxxx['wherenot']);
                }
                $queryxxx->where('activo_id', $dataxxxx['activoxx']);
                $queryxxx->where('acceso_id', $dataxxxx['accesoxx']);
                $queryxxx->where('actor_id', $dataxxxx['actorxxx']);
            })
            ->get();
        $respuest = $this->getCuerpoComboCT($dataxxxx);
        return $respuest;
    }


    public function getActiacceCT($dataxxxx)
    {

        $dataxxxx = $this->getDefaultCT($dataxxxx);
        $dataxxxx['dataxxxx'] = Acceso::select('accesos.acceso as optionxx', 'accesos.id as valuexxx')

            ->where(function ($queryxxx) use ($dataxxxx) {
                $notinxxx = Actiacce::where('activo_id', $dataxxxx['activoxx'])->get(['acceso_id']);
                if (isset($dataxxxx['whereinx']) && count($dataxxxx['whereinx'])) {
                    $queryxxx->whereIN('id', $dataxxxx['whereinx']);
                }
                if (isset($dataxxxx['wherenot']) && count($dataxxxx['wherenot'])) {
                    $queryxxx->whereNotIn('id', $dataxxxx['wherenot']);
                }
                // $queryxxx->where('actiacces.acceso_id', null);
                $queryxxx->whereNotIn('id', $notinxxx);
            })
            ->orWhere('accesos.id', $dataxxxx['selectid'])
            ->get();
        $respuest = $this->getCuerpoComboCT($dataxxxx);
        return $respuest;
    }


    public function getAcceactoCT($dataxxxx)
    {

        $dataxxxx = $this->getDefaultCT($dataxxxx);
        $dataxxxx['dataxxxx'] = Actor::select('actors.actor as optionxx', 'actors.id as valuexxx')

            ->where(function ($queryxxx) use ($dataxxxx) {
                $notinxxx = Acceacto::where('actiacce_id', $dataxxxx['padrexxx'])->get(['actor_id']);
                if (isset($dataxxxx['whereinx']) && count($dataxxxx['whereinx'])) {
                    $queryxxx->whereIN('id', $dataxxxx['whereinx']);
                }
                if (isset($dataxxxx['wherenot']) && count($dataxxxx['wherenot'])) {
                    $queryxxx->whereNotIn('id', $dataxxxx['wherenot']);
                }
                // $queryxxx->where('actiacces.acceso_id', null);
                $queryxxx->whereNotIn('id', $notinxxx);
            })
            ->orWhere('actors.id', $dataxxxx['selectid'])
            ->get();
        $respuest = $this->getCuerpoComboCT($dataxxxx);
        return $respuest;
    }

    public function getActomotiCT($dataxxxx)
    {

        $dataxxxx = $this->getDefaultCT($dataxxxx);
        $dataxxxx['dataxxxx'] = Motivo::select('motivos.motivo as optionxx', 'motivos.id as valuexxx')

            ->where(function ($queryxxx) use ($dataxxxx) {
                $notinxxx = Actomoti::where('acceacto_id', $dataxxxx['padrexxx'])->get(['motivo_id']);
                if (isset($dataxxxx['whereinx']) && count($dataxxxx['whereinx'])) {
                    $queryxxx->whereIN('id', $dataxxxx['whereinx']);
                }
                if (isset($dataxxxx['wherenot']) && count($dataxxxx['wherenot'])) {
                    $queryxxx->whereNotIn('id', $dataxxxx['wherenot']);
                }
                // $queryxxx->where('actiacces.acceso_id', null);
                $queryxxx->whereNotIn('id', $notinxxx);
            })
            ->orWhere('motivos.id', $dataxxxx['selectid'])
            ->get();
        $respuest = $this->getCuerpoComboCT($dataxxxx);
        return $respuest;
    }


    public function getMotiresuCT($dataxxxx)
    {

        $dataxxxx = $this->getDefaultCT($dataxxxx);
        $dataxxxx['dataxxxx'] = Resultad::select('resultads.resultad as optionxx', 'resultads.id as valuexxx')

            ->where(function ($queryxxx) use ($dataxxxx) {
                $notinxxx = Motiresu::where('actomoti_id', $dataxxxx['padrexxx'])->get(['resultad_id']);
                if (isset($dataxxxx['whereinx']) && count($dataxxxx['whereinx'])) {
                    $queryxxx->whereIN('id', $dataxxxx['whereinx']);
                }
                if (isset($dataxxxx['wherenot']) && count($dataxxxx['wherenot'])) {
                    $queryxxx->whereNotIn('id', $dataxxxx['wherenot']);
                }
                // $queryxxx->where('actiacces.acceso_id', null);
                $queryxxx->whereNotIn('id', $notinxxx);
            })
            ->orWhere('resultads.id', $dataxxxx['selectid'])
            ->get();
        $respuest = $this->getCuerpoComboCT($dataxxxx);
        return $respuest;
    }

    public function getWhereInNotIn($dataxxxx, $queryxxx, $tablaxxx)
    {
        if (isset($dataxxxx['whereinx']) && count($dataxxxx['whereinx'])) {
            $queryxxx->whereIN($tablaxxx . 'id', $dataxxxx['whereinx']);
        }
        if (isset($dataxxxx['wherenot']) && count($dataxxxx['wherenot'])) {
            $queryxxx->whereNotIn($tablaxxx . 'id', $dataxxxx['wherenot']);
        }
        return $queryxxx;
    }

    
    public function getNivelCT($dataxxxx)
    {
        $dataxxxx = $this->getDefaultCT($dataxxxx);
        $dataxxxx['dataxxxx'] = Nivel::select('nivels.nivel as optionxx', 'nivels.id as valuexxx')
            ->where(function ($queryxxx) use ($dataxxxx) {
                if (isset($dataxxxx['whereinx']) && count($dataxxxx['whereinx'])) {
                    $queryxxx->whereIN('id', $dataxxxx['whereinx']);
                }
                if (isset($dataxxxx['wherenot']) && count($dataxxxx['wherenot'])) {
                    $queryxxx->whereNotIn('id', $dataxxxx['wherenot']);
                }

                if ($dataxxxx['selectid']>0) {
                    $queryxxx->orWhere('id', $dataxxxx['selectid']) ;
                }
            })
            
            ->get();
        $respuest = $this->getCuerpoComboCT($dataxxxx);
        return $respuest;
    }

    public function getProbabilCT($dataxxxx)
    {
        $dataxxxx = $this->getDefaultCT($dataxxxx);
        $dataxxxx['dataxxxx'] = Probabil::join('nivels', 'probabils.nivel_id', '=', 'nivels.id')
            ->join('tipoprobs', 'probabils.tipoprob_id', '=', 'tipoprobs.id')
            ->where(function ($queryxxx) use ($dataxxxx) {
                $queryxxx = $this->getWhereInNotIn($dataxxxx, $queryxxx, 'probabils.');
            })
            ->get(['tipoprobs.tipoprob as optionxx', 'nivels.nivel as optionxz', 'probabils.id as valuexxx']);
        $respuest = $this->getCuerpoProbabilComboCT($dataxxxx);
        return $respuest;
    }

    public function getActorCT($dataxxxx)
    {
        $dataxxxx = $this->getDefaultCT($dataxxxx);
        $dataxxxx['dataxxxx'] = Actor::where(function ($queryxxx) use ($dataxxxx) {
            $queryxxx = $this->getWhereInNotIn($dataxxxx, $queryxxx, 'actors.');
            if (isset($dataxxxx['padrexxx'])) {
                $notinxxx = Vulnacto::where('vulnerab_id', $dataxxxx['padrexxx'])->get(['actor_id']);
                $queryxxx->whereNotIn('actors.id', $notinxxx);
            }
        })
            ->orWhere(
                function ($queryxxx) use ($dataxxxx) {
                    if (isset($dataxxxx['selectid']) && $dataxxxx['selectid'] > 0) {
                        $queryxxx->orWhere('actors.id', $dataxxxx['selectid']);
                    }
                }
            )
            ->get(['actors.actor as optionxx',  'actors.id as valuexxx']);
        $respuest = $this->getCuerpoComboCT($dataxxxx);
        return $respuest;
    }

    public function getHerramieCT($dataxxxx)
    {
        $dataxxxx = $this->getDefaultCT($dataxxxx);
        $dataxxxx['dataxxxx'] = Herramie::where(function ($queryxxx) use ($dataxxxx) {
            $queryxxx = $this->getWhereInNotIn($dataxxxx, $queryxxx, 'herramies.');
            $notinxxx = Actoherr::where('vulnacto_id', $dataxxxx['padrexxx'])->get(['herramie_id']);
            $queryxxx->whereNotIn('herramies.id', $notinxxx);
        })
            ->orWhere(
                function ($queryxxx) use ($dataxxxx) {
                    if ($dataxxxx['selectid'] > 0) {
                        $queryxxx->orWhere('herramies.id', $dataxxxx['selectid']);
                    }
                }
            )
            ->get(['herramies.herramie as optionxx',  'herramies.id as valuexxx']);
        $respuest = $this->getCuerpoComboCT($dataxxxx);
        return $respuest;
    }


    public function getVulnerabCT($dataxxxx)
    {
        $dataxxxx = $this->getDefaultCT($dataxxxx);
        $dataxxxx['dataxxxx'] = Vulnerab::where(function ($queryxxx) use ($dataxxxx) {
            $queryxxx = $this->getWhereInNotIn($dataxxxx, $queryxxx, 'vulnerabs.');
            $queryxxx->where('activo_id', $dataxxxx['padrexxx']);
        })
            ->get(['vulnerabs.vulnerab as optionxx',  'vulnerabs.id as valuexxx']);
        $respuest = $this->getCuerpoComboCT($dataxxxx);
        return $respuest;
    }


    public function getVulenerabActorCT($dataxxxx)
    {
        // 'actor_id',
        // 'vulnerab_id'
        $dataxxxx = $this->getDefaultCT($dataxxxx);
        $dataxxxx['dataxxxx'] = Actor::join('vulnactos', 'actors.id', '=', 'vulnactos.actor_id') 
            ->where(function ($queryxxx) use ($dataxxxx) {
                $queryxxx = $this->getWhereInNotIn($dataxxxx, $queryxxx, 'actors.');
                $queryxxx->where('vulnactos.vulnerab_id', $dataxxxx['vulnerab']);
            })
            ->get(['actors.actor as optionxx',  'vulnactos.id as valuexxx']);
        $respuest = $this->getCuerpoComboCT($dataxxxx);
        return $respuest;
    }

    public function getActorHerramientaCT($dataxxxx)
    {
        $dataxxxx = $this->getDefaultCT($dataxxxx);
        $dataxxxx['dataxxxx'] = Herramie::join('actoherrs', 'herramies.id', '=', 'actoherrs.herramie_id')
            ->where(function ($queryxxx) use ($dataxxxx) {
                $queryxxx = $this->getWhereInNotIn($dataxxxx, $queryxxx, 'actors.');
                $queryxxx->where('actoherrs.vulnacto_id', $dataxxxx['vulnacto']);
            })
            ->get(['herramies.herramie as optionxx',  'herramies.id as valuexxx']);
        $respuest = $this->getCuerpoComboCT($dataxxxx);
        return $respuest;
    }

    public function getImpactoCT($dataxxxx)
    {

        $dataxxxx = $this->getDefaultCT($dataxxxx);
        $dataxxxx['dataxxxx'] = Impacto::select('impactos.impacto as optionxx', 'impactos.id as valuexxx')

            ->where(function ($queryxxx) use ($dataxxxx) {
                $notinxxx = Resuimpa::join('impanives', 'resuimpas.impanive_id', '=', 'impanives.id')
                    ->where('motiresu_id', $dataxxxx['padrexxx'])->get(['impacto_id']);

                if (isset($dataxxxx['whereinx']) && count($dataxxxx['whereinx'])) {
                    $queryxxx->whereIN('id', $dataxxxx['whereinx']);
                }
                if (isset($dataxxxx['wherenot']) && count($dataxxxx['wherenot'])) {
                    $queryxxx->whereNotIn('id', $dataxxxx['wherenot']);
                }
                // $queryxxx->where('actiacces.acceso_id', null);
                $queryxxx->whereNotIn('id', $notinxxx);
            })
            ->orWhere('impactos.id', $dataxxxx['selectid'])

            ->get();
        $respuest = $this->getCuerpoComboCT($dataxxxx);
        return $respuest;
    }


    public function getProbabilComboCT($dataxxxx)
    {

        $dataxxxx = $this->getDefaultCT($dataxxxx);
        $dataxxxx['dataxxxx'] = Tipoprob::select('tipoprobs.tipoprob as optionxx', 'tipoprobs.id as valuexxx')
            ->where(function ($queryxxx) use ($dataxxxx) {
                $notinxxx = Resuprob::join('probabils', 'resuprobs.probabil_id', '=', 'probabils.id')
                    ->where('motiresu_id', $dataxxxx['padrexxx'])->get(['tipoprob_id']);
                if (isset($dataxxxx['whereinx']) && count($dataxxxx['whereinx'])) {
                    $queryxxx->whereIN('tipoprobs.id', $dataxxxx['whereinx']);
                }
                if (isset($dataxxxx['wherenot']) && count($dataxxxx['wherenot'])) {
                    $queryxxx->whereNotIn('tipoprobs.id', $dataxxxx['wherenot']);
                }
                $queryxxx->whereNotIn('tipoprobs.id', $notinxxx);
            })
            ->orWhere('tipoprobs.id', $dataxxxx['selectid'])

            ->get();
        $respuest = $this->getCuerpoComboCT($dataxxxx);
        return $respuest;
    }
}
//
