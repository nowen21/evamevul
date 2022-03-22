<?php

namespace App\Http\Controllers\Backend\Administ;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Administ\ActorCrearRequest;
use App\Http\Requests\Backend\Administ\ActorEdiarRequest;
use App\Models\Actor;
use App\Traits\Backend\Administ\Actorxxx\BActorxxxParametrizarTrait;
use App\Traits\Backend\Administ\Actorxxx\BActorxxxVistasTrait;
use App\Traits\Backend\Administ\BAdministAjaxTrait;
use App\Traits\Backend\Administ\BAdministCrudTrait;
use App\Traits\Backend\Administ\BAdministDataTablesTrait;
use App\Traits\Backend\Administ\BAdministListadosTrait;
use App\Traits\Backend\Administ\BAdministPestaniasTrait;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    private $acciones=['crearxxx', 'formulario'];
    use BActorxxxParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use BAdministPestaniasTrait; // trait que construye las pestañas que va a tener el modulo con respectiva logica
    use BAdministListadosTrait; // trait que arma las consultas para las datatables
    use BAdministCrudTrait; // trait donde se hace el crud de localidades
    use BAdministDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use BActorxxxVistasTrait; // trait que arma la logica para lo metodos: crud
    use BAdministAjaxTrait; // administrar los combos utilizados en las vistas
    use BotonesTrait; // traita arma los botones
    use CombosTrait;
    public function __construct()
    {
        $this->opciones['permisox'] = 'actorxxx';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->getPestanias([]);
        $this->getBActor([]);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->getRespuesta(['btnxxxxx' => 'b']);
        return $this->view();
    }


    public function store(ActorCrearRequest $request)
    {
        return $this->setActor([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Actor creado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }


    public function show(Actor $modeloxx)
    {
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['verxxxxx', 'verxxxxx'];
        return $this->view();
    }


    public function edit(Actor $modeloxx)
    {
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['editarxx', 'formulario'];
        $this->getRespuesta(['btnxxxxx' => 'b']);
        return $this->view();
    }


    public function update(ActorEdiarRequest $request,  Actor $modeloxx)
    {
        return $this->setActor([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Actor editado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }

    public function inactivate(Actor $modeloxx)
    {
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['borrarxx', 'destroyx'];
        $this->getRespuesta(['btnxxxxx' => 'b','tituloxx'=>'ELIMINAR']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['borrarxx', 'destroyx'],]);
    }


    public function destroy(Request $request, Actor $modeloxx)
    {
        $modeloxx->delete();
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Eliminado correctamente');
    }
}
