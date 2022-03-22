<?php

namespace App\Http\Controllers\Backend\Administ\Modimpac;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Administ\Modimpac\ImpactoCrearRequest;
use App\Http\Requests\Backend\Administ\Modimpac\ImpactoEdiarRequest;
use App\Models\Backend\Impactox\Impacto;
use App\Traits\Backend\Administ\Modimpac\BModimpacAjaxTrait;
use App\Traits\Backend\Administ\Modimpac\BModimpacCrudTrait;
use App\Traits\Backend\Administ\Modimpac\BModimpacDataTablesTrait;
use App\Traits\Backend\Administ\Modimpac\BModimpacListadosTrait;
use App\Traits\Backend\Administ\Modimpac\BModimpacPestaniasTrait;
use App\Traits\Backend\Administ\Modimpac\Impactox\BImpactoxParametrizarTrait;
use App\Traits\Backend\Administ\Modimpac\Impactox\BImpactoxVistasTrait;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;

use Illuminate\Http\Request;


class ImpactoController extends Controller
{
    private $acciones=['crearxxx', 'formulario'];
    // use MigracionTrait;
    use BImpactoxParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use BModimpacPestaniasTrait; // trait que construye las pestañas que va a tener el modulo con respectiva logica
    use BModimpacListadosTrait; // trait que arma las consultas para las datatables
    use BModimpacCrudTrait; // trait donde se hace el crud de localidades
    use BModimpacDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use BImpactoxVistasTrait; // trait que arma la logica para lo metodos: crud
    use BModimpacAjaxTrait; // administrar los combos utilizados en las vistas
    use BotonesTrait; // traita arma los botones
    use CombosTrait;
    public function __construct()
    {
        $this->opciones['permisox'] = 'impactox';
        $this->getOpciones();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->getPestanias([]);
        $this->getTablaImpactox([]);
        return view($this->opciones['pestanix'], ['todoxxxx' => $this->opciones]);
    }

    public function create()
    {
        $this->getRespuesta(['btnxxxxx' => 'b']);
        return $this->view();
    }


    public function store(ImpactoCrearRequest $request)
    {
        return $this->setImpacto([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Registro creado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }


    public function show(Impacto $modeloxx)
    {
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['verxxxxx', 'verxxxxx'];
        return $this->view();
    }


    public function edit(Impacto $modeloxx)
    {
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['editarxx', 'formulario'];
        $this->getRespuesta(['btnxxxxx' => 'b']);
        $this->getRespuesta(['btnxxxxx' => 'a','tituloxx'=>'ASIGNAR IMPACTOS','routexxx'=>'impanive','parametr'=>[$modeloxx->id]]);
        return $this->view();
    }


    public function update(ImpactoEdiarRequest $request,  Impacto $modeloxx)
    {
        return $this->setImpacto([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Registro actualizado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }

    public function inactivate(Impacto $modeloxx)
    {
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['borrarxx', 'destroyx'];
        $this->getRespuesta(['btnxxxxx' => 'b','tituloxx'=>'ELIMINAR']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['borrarxx', 'destroyx'],]);
    }


    public function destroy(Request $request, Impacto $modeloxx)
    {
        $modeloxx->delete();
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Eliminado correctamente');
    }
}
