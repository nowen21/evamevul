<?php

namespace App\Http\Controllers\Backend\Administ;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Administ\MotivoCrearRequest;
use App\Http\Requests\Backend\Administ\MotivoEdiarRequest;
use App\Models\Motivo;
use App\Traits\Backend\Administ\Motivoxx\BMotivoxxParametrizarTrait;
use App\Traits\Backend\Administ\Motivoxx\BMotivoxxVistasTrait;
use App\Traits\Backend\Administ\BAdministAjaxTrait;
use App\Traits\Backend\Administ\BAdministCrudTrait;
use App\Traits\Backend\Administ\BAdministDataTablesTrait;
use App\Traits\Backend\Administ\BAdministListadosTrait;
use App\Traits\Backend\Administ\BAdministPestaniasTrait;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;

class MotivoController extends Controller
{
    private $acciones=['crearxxx', 'formulario'];
    use BMotivoxxParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use BAdministPestaniasTrait; // trait que construye las pestañas que va a tener el modulo con respectiva logica
    use BAdministListadosTrait; // trait que arma las consultas para las datatables
    use BAdministCrudTrait; // trait donde se hace el crud de localidades
    use BAdministDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use BMotivoxxVistasTrait; // trait que arma la logica para lo metodos: crud
    use BAdministAjaxTrait; // administrar los combos utilizados en las vistas
    use BotonesTrait; // traita arma los botones
    use CombosTrait;
    public function __construct()
    {
        $this->opciones['permisox'] = 'motivoxx';
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
        $this->getBMotivo([]);
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


    public function store(MotivoCrearRequest $request)
    {
        return $this->setMotivo([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Motivo creado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }


    public function show(Motivo $modeloxx)
    {
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['verxxxxx', 'verxxxxx'];
        return $this->view();
    }


    public function edit(Motivo $modeloxx)
    {
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['editarxx', 'formulario'];
        $this->getRespuesta(['btnxxxxx' => 'b']);
        return $this->view();
    }


    public function update(MotivoEdiarRequest $request,  Motivo $modeloxx)
    {
        return $this->setMotivo([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Motivo editado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }

    public function inactivate(Motivo $modeloxx)
    {
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['borrarxx', 'destroyx'];
        $this->getRespuesta(['btnxxxxx' => 'b','tituloxx'=>'ELIMINAR']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['borrarxx', 'destroyx'],]);
    }


    public function destroy(Request $request, Motivo $modeloxx)
    {
        $modeloxx->delete();
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Eliminado correctamente');
    }
}
