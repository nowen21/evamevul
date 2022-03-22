<?php

namespace App\Http\Controllers\Backend\Administ;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Administ\ResuimpaCrearRequest;
use App\Http\Requests\Backend\Administ\ResuimpaEdiarRequest;
use App\Models\Backend\Administ\Probabil\Probabil;
use App\Models\Backend\Administ\Probabil\Tipoprob;
use App\Models\Backend\Impactox\Impacto;
use App\Models\Backend\Impactox\Impasuma;
use App\Models\Backend\Impactox\Nivel;
use App\Models\Backend\Impactox\Resuimpa;
use App\Models\Motiresu;
use App\Traits\Backend\Administ\Resuimpa\BResuimpaParametrizarTrait;
use App\Traits\Backend\Administ\Resuimpa\BResuimpaVistasTrait;
use App\Traits\Backend\Administ\BAdministAjaxTrait;
use App\Traits\Backend\Administ\BAdministCrudTrait;
use App\Traits\Backend\Administ\BAdministDataTablesTrait;
use App\Traits\Backend\Administ\BAdministListadosTrait;
use App\Traits\Backend\Administ\BAdministPestaniasTrait;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;

class ResuimpaController extends Controller
{
    private $padrexxx = null;
    private $acciones = ['crearxxx', 'formulario'];
    use BResuimpaParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use BAdministPestaniasTrait; // trait que construye las pestañas que va a tener el modulo con respectiva logica
    use BAdministListadosTrait; // trait que arma las consultas para las datatables
    use BAdministCrudTrait; // trait donde se hace el crud de localidades
    use BAdministDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use BResuimpaVistasTrait; // trait que arma la logica para lo metodos: crud
    use BAdministAjaxTrait; // administrar los combos utilizados en las vistas
    use BotonesTrait; // traita arma los botones
    use CombosTrait;
    public function __construct()
    {
        $this->opciones['permisox'] = 'resuimpa';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function getNivel($sumaxxxx)
    {
        $nivelxxx = Nivel::where(
            function ($queryxxx) use ($sumaxxxx) {
                $minimoxx = 0.0;
                if ($sumaxxxx > 0.2) {
                    $numeroxx = explode('.', $sumaxxxx);
                    if (count($numeroxx) == 2) {
                       
                        echo $sumaxxxx . '<br>';
                        $numeroxx = substr($numeroxx[1], 0, 1);
                        if ($numeroxx % 2 == 0) {
                            $minimoxx = '0.' .  $numeroxx;
                        } else {
                            $minimoxx = '0.' .  ($numeroxx - 1);
                        }
                    }else if ($sumaxxxx==1) {
                        $minimoxx=$sumaxxxx-0.2;
                    } 
                    $queryxxx->where('minimoxx', $minimoxx);
                }
                $queryxxx->where('maximoxx',   $minimoxx + 0.2);
            }
        )->first()->id;
        return $nivelxxx;
    }
    public function index(Motiresu $padrexxx)
    {


        $motiresu = Motiresu::get(['id']);

        foreach ($motiresu as $key => $motiresx) {
            $sumaxxxx = 0;
            //  Impanive::
            foreach ($motiresx->resuimpas as $key => $value) {
                $sumaxxxx += $value->impanive->impanive;
                $impasuma = Impasuma::where('motiresu_id', $motiresx->id)->first();
                $dataxxxx = [
                    'motiresu_id' => $motiresx->id,
                    'nivel_id' => $this->getNivel($sumaxxxx),
                    'totaimpa' => $sumaxxxx
                ];
                if (is_null($impasuma)) {
                    // Impasuma::create($dataxxxx);
                } else {
                    // $impasuma->update($dataxxxx);
                }
            }
        }
        $padreidx = $padrexxx->id;
        $this->getParamPesta($padrexxx);
        $this->getPestanias([]);
        $this->getBResuimpa(['parametr' => [$padreidx], 'paranuev' => [$padreidx]]);
        // return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(Motiresu $padrexxx)
    {
        $this->opciones['parametr'] = [$padrexxx->id];
        $this->padrexxx = $padrexxx;
        $this->getRespuesta(['btnxxxxx' => 'b']);
        return $this->view();
    }


    public function store(ResuimpaCrearRequest $request, $padrexxx)
    {
        $request->request->add(['motiresu_id' => $padrexxx]);
        return $this->setResuimpa([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Motivo creado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }


    public function show(Resuimpa $modeloxx)
    {
        $this->padrexxx = $modeloxx->motiresu;
        $this->opciones['modeloxx'] = $modeloxx;
        $this->acciones = ['verxxxxx', 'verxxxxx'];
        return $this->view();
    }

    public function edit(Resuimpa $modeloxx)
    {
        $this->padrexxx = $modeloxx->motiresu;
        $this->opciones['modeloxx'] = $modeloxx;
        $this->acciones = ['editarxx', 'formulario'];
        $this->getRespuesta(['btnxxxxx' => 'b']);
        return $this->view();
    }


    public function update(ResuimpaEdiarRequest $request,  Resuimpa $modeloxx)
    {
        return $this->setResuimpa([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Motivo editado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }

    public function inactivate(Resuimpa $modeloxx)
    {
        $this->padrexxx = $modeloxx->motiresu;
        $this->opciones['modeloxx'] = $modeloxx;
        $this->acciones = ['borrarxx', 'destroyx'];
        $this->getRespuesta(['btnxxxxx' => 'b', 'tituloxx' => 'ELIMINAR']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['borrarxx', 'destroyx'],]);
    }


    public function destroy(Request $request, Resuimpa $modeloxx)
    {
        $padrexxx = $modeloxx->motiresu_id;
        $modeloxx->delete();
        return redirect()
            ->route($this->opciones['permisox'], [$padrexxx])
            ->with('info', 'Eliminado correctamente');
    }
}
