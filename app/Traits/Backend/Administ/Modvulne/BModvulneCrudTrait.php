<?php

namespace App\Traits\Backend\Administ\Modvulne;

use App\Models\Backend\Administ\Modvulne\Actoherr;
use App\Models\Backend\Administ\Modvulne\Herramie;
use App\Models\Backend\Administ\Modvulne\Vulnacto;
use App\Models\Backend\Administ\Modvulne\Vulnerab;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite el crear y editar del acta de encuetro
 */
trait BModvulneCrudTrait
{
    /**
     * grabar o actualizar el acta de encuentro
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function setHerramie($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            if (isset($dataxxxx['modeloxx']->id)) { 
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['modeloxx'] = Herramie::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setVulnerab($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            if (isset($dataxxxx['modeloxx']->id)) { 
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['modeloxx'] = Vulnerab::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setVulnacto($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            if (isset($dataxxxx['modeloxx']->id)) { 
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['modeloxx'] = Vulnacto::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setActoherr($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            if (isset($dataxxxx['modeloxx']->id)) { 
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['modeloxx'] = Actoherr::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
}
