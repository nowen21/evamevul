<?php

namespace App\Traits\Backend\Administ\Probabil;

use App\Models\Backend\Administ\Probabil\Consecue;
use App\Models\Backend\Administ\Probabil\Consprob;
use App\Models\Backend\Administ\Probabil\Probabil;
use App\Models\Backend\Administ\Probabil\Tconsecu;
use App\Models\Backend\Administ\Probabil\Tipoprob;
use App\Models\Backend\Impactox\Nivel;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite el crear y editar del acta de encuetro
 */
trait BProbabilCrudTrait
{
    /**
     * grabar o actualizar el acta de encuentro
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function setTconsecu($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['modeloxx'] = Tconsecu::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setConsecue($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['modeloxx'] = Consecue::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setTipoprob($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['modeloxx'] = Tipoprob::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setProbabil($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $requestx = $dataxxxx['requestx']->all();
            $probabil = Probabil::where('tipoprob_id', $requestx['tipoprob_id'])->get()->count();
            $nivelxxx = Nivel::find($requestx['nivel_id']);
            // ddd($nivelxxx->toArray());
            if (isset($dataxxxx['modeloxx']->id)) {
                $requestx['probabil'] = $nivelxxx->valonive / $probabil;
                $dataxxxx['modeloxx']->update($requestx);
            } else {
                if ($probabil == 0) {
                    $probabil = 1;
                } else {
                    $probabil++;
                }
                $requestx['probabil'] = $nivelxxx->valonive / $probabil;
                $dataxxxx['modeloxx'] = Probabil::create($requestx);
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setConsprob($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['modeloxx'] = Consprob::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
}
