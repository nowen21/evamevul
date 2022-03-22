<?php

namespace App\Traits\Backend\Administ;

use App\Models\Acceacto;
use App\Models\Acceso;
use App\Models\Actiacce;
use App\Models\Activo;
use App\Models\Actomoti;
use App\Models\Actor;
use App\Models\Backend\Administ\Metodoxx\Metodo;
use App\Models\Backend\Administ\Probabil\Probabil;
use App\Models\Backend\Administ\Probabil\Probimpa;
use App\Models\Backend\Administ\Probabil\Probsuma;
use App\Models\Backend\Administ\Probabil\Resuprob;
use App\Models\Backend\Impactox\Impanive;
use App\Models\Backend\Impactox\Impasuma;
use App\Models\Backend\Impactox\Nivel;
use App\Models\Backend\Impactox\Resuimpa;
use App\Models\Motiresu;
use App\Models\Motivo;
use App\Models\Resultad;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite el crear y editar del acta de encuetro
 */
trait BAdministCrudTrait
{
    /**
     * grabar o actualizar el acta de encuentro
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function setActivo($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['modeloxx'] = Activo::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setAcceso($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['modeloxx'] = Acceso::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setActor($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['modeloxx'] = Actor::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setMotivo($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['modeloxx'] = Motivo::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setResultad($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['modeloxx'] = Resultad::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setActiacce($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['modeloxx'] = Actiacce::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setAcceacto($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['modeloxx'] = Acceacto::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setActomoti($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['modeloxx'] = Actomoti::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setMotiresu($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['modeloxx'] = Motiresu::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function getNivel($sumaxxxx)
    {

        $nivelxxx = Nivel::where(
            function ($queryxxx) use ($sumaxxxx) {
                $minimoxx = 0.0;
                if ($sumaxxxx > 0.2) {
                    $minimoxx = '0.' . substr(explode('.', $sumaxxxx)[1], 0, 1);
                    $queryxxx->where('minimoxx', '>', $minimoxx);
                }
                $queryxxx->where('maximoxx', '<=',  $minimoxx + 0.2);
            }
        )->first()->id;
        return $nivelxxx;
    }
    public function setImpasuma($dataxxxx)
    {
        $sumaxxxx = 0;
        $resuimpa = $dataxxxx->motiresu->resuimpas;
        foreach ($resuimpa as $key => $value) {
            $sumaxxxx += $value->impanive->impanive;
        }
        $modeloxx = Impasuma::where('motiresu_id', $dataxxxx->motiresu_id)->first();
        $dataxxxx = [
            'motiresu_id' => $dataxxxx->motiresu_id,
            'nivel_id' => $this->getNivel($sumaxxxx),
            'totaimpa' => $sumaxxxx
        ];
        if (isset($modeloxx->id)) {
            $modeloxx->update($dataxxxx);
        } else {
            $modeloxx = Impasuma::create($dataxxxx);
        }
        return $modeloxx;
    }

    public function setProbsuma($dataxxxx)
    {
        $sumaxxxx = 0;
        $resuimpa = $dataxxxx->motiresu->resuprobs;
        foreach ($resuimpa as $key => $value) {
            $sumaxxxx += $value->probabil->probabil;
        }
        $modeloxx = Probsuma::where('motiresu_id', $dataxxxx->motiresu_id)->first();
        $dataxxxx = [
            'motiresu_id' => $dataxxxx->motiresu_id,
            'nivel_id' => $this->getNivel($sumaxxxx),
            'totaprob' => $sumaxxxx
        ];
        if (isset($modeloxx->id)) {
            $modeloxx->update($dataxxxx);
        } else {
            $modeloxx = Probsuma::create($dataxxxx);
        }
        return $modeloxx;
    }

    public function setResuimpa($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $impanive = Impanive::where('impacto_id', $dataxxxx['requestx']->impacto_id)->where('nivel_id', $dataxxxx['requestx']->nivel_id)->first();
            $dataxxxx['requestx']->request->add(['impanive_id' => $impanive->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['modeloxx'] = Resuimpa::create($dataxxxx['requestx']->all());
            }
            $this->setImpasuma($dataxxxx['modeloxx']);
            $this->setProbimpa($dataxxxx['modeloxx']->motiresu);
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    /**
     * Hallar el risgo
     *
   
     * @param object $motiresu
     * @return object
     */
    public function setProbimpa($motiresu)
    {

        $respuest = DB::transaction(function () use ($motiresu) {
            // inicializar varibles
            $probabil = 0;
            $impactox = 0;
            $updacrea = [
                'motiresu_id' => $motiresu->id,
            ];

            // * saber si ya hay sumatoria de los impactos asignados al resultado
            if (!is_null($motiresu->impasuma)) {
                $updacrea['impasuma_id'] = $motiresu->impasuma->id;
                $impactox = $motiresu->impasuma->totaimpa;
            }

            // * saber si ya hay sumatoria de las probabilidades asignadas al resultado
            if (!is_null($motiresu->probsuma)) {
                $updacrea['probsuma_id'] = $motiresu->probsuma->id;
                $probabil = $motiresu->probsuma->totaprob;
            }
            // * hallar el risgo
            $updacrea['riesgoxx'] = $probabil * $impactox;
            // * Conocer el nivel al que pertenece el riesgo
            $updacrea['nivel_id'] = Nivel::where('valonive', '>=', $updacrea['riesgoxx'])->orderBy('valonive', 'ASC')->first()->id;
            // * Conocer el método de acuerdo al nivel del riesgo

            $updacrea['metodo_id'] = Metodo::where('nivel_id', $updacrea['nivel_id'] + 1)->first()->id;

            $probimpa = $motiresu->probimpa;
            // * crear o actualiza el riesgo
            if (!is_null($probimpa)) {
                $probimpa->update($updacrea);
            } else {
                $probimpa = Probimpa::create($updacrea);
            }

            return $probimpa;
        }, 5);

        return $respuest;
    }

    public function setResuprob($dataxxxx)
    {

        $respuest = DB::transaction(function () use ($dataxxxx) {

            $probabil = Probabil::where('tipoprob_id', $dataxxxx['requestx']->tipoprob_id)->where('nivel_id', $dataxxxx['requestx']->nivel_id)->first();
            $dataxxxx['requestx']->request->add(['probabil_id' => $probabil->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['modeloxx'] = Resuprob::create($dataxxxx['requestx']->all());
            }
            $this->setProbsuma($dataxxxx['modeloxx']);
            $this->setProbimpa($dataxxxx['modeloxx']->motiresu);
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
}
