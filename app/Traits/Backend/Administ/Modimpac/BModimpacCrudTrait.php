<?php

namespace App\Traits\Backend\Administ\Modimpac;

use App\Models\Backend\Impactox\Impacto;
use App\Models\Backend\Impactox\Impanive;
use App\Models\Backend\Impactox\Nivel;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite el crear y editar del acta de encuetro
 */
trait BModimpacCrudTrait
{
    /**
     * grabar o actualizar el acta de encuentro
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function setImpacto($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['modeloxx'] = Impacto::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setImpanive($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $requestx = $dataxxxx['requestx']->all();
            $impanive = Impanive::where('impacto_id', $requestx['impacto_id'])->get()->count();
            $nivelxxx = Nivel::find($requestx['nivel_id']);
            // ddd($nivelxxx->toArray());
            if (isset($dataxxxx['modeloxx']->id)) {
                $requestx['impanive'] = $nivelxxx->valonive / $impanive;
                $dataxxxx['modeloxx']->update($requestx);
            } else {
                if ($impanive == 0) {
                    $impanive = 1;
                } else {
                    $impanive++;
                }
                $requestx['impanive'] = $nivelxxx->valonive / $impanive;
                $dataxxxx['modeloxx'] = Impanive::create($requestx);
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
}
