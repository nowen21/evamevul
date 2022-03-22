<?php

namespace App\Http\Controllers\Backend\Administ\Probabil;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Administ\Probabil\TconsecuCrearRequest;
use App\Http\Requests\Backend\Administ\Probabil\TconsecuEdiarRequest;
use App\Models\Backend\Administ\Probabil\Tconsecu;
use App\Traits\Backend\Administ\Probabil\BProbabilAjaxTrait;
use App\Traits\Backend\Administ\Probabil\BProbabilCrudTrait;
use App\Traits\Backend\Administ\Probabil\BProbabilDataTablesTrait;
use App\Traits\Backend\Administ\Probabil\BProbabilListadosTrait;
use App\Traits\Backend\Administ\Probabil\BProbabilPestaniasTrait;
use App\Traits\Backend\Administ\Probabil\Tconsecu\BTconsecuParametrizarTrait;
use App\Traits\Backend\Administ\Probabil\Tconsecu\BTconsecuVistasTrait;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;

class TconsecuController extends Controller
{
    private $acciones=['crearxxx', 'formulario'];
    use BTconsecuParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use BProbabilPestaniasTrait; // trait que construye las pestañas que va a tener el modulo con respectiva logica
    use BProbabilListadosTrait; // trait que arma las consultas para las datatables
    use BProbabilCrudTrait; // trait donde se hace el crud de localidades
    use BProbabilDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use BTconsecuVistasTrait; // trait que arma la logica para lo metodos: crud
    use BProbabilAjaxTrait; // administrar los combos utilizados en las vistas
    use BotonesTrait; // traita arma los botones
    use CombosTrait;
    public function __construct()
    {
        $this->opciones['permisox'] = 'tconsecu';
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
        $this->getBTconsecu([]);
        return view($this->opciones['rutacomp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
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


    public function store(TconsecuCrearRequest $request)
    {
        return $this->setTconsecu([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Registro creado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }


    public function show(Tconsecu $modeloxx)
    {
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['verxxxxx', 'verxxxxx'];
        return $this->view();
    }


    public function edit(Tconsecu $modeloxx)
    {
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['editarxx', 'formulario'];
        $this->getRespuesta(['btnxxxxx' => 'b']);
        $this->getRespuesta(['btnxxxxx' => 'a','tituloxx'=>'ASIGNAR CONSECUENCIAS','routexxx'=>'consecue','parametr'=>[$modeloxx->id]]);
        return $this->view();
    }


    public function update(TconsecuEdiarRequest $request,  Tconsecu $modeloxx)
    {
        return $this->setTconsecu([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Registro actualizado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }

    public function inactivate(Tconsecu $modeloxx)
    {
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['borrarxx', 'destroyx'];
        $this->getRespuesta(['btnxxxxx' => 'b','tituloxx'=>'ELIMINAR']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['borrarxx', 'destroyx'],]);
    }


    public function destroy(Request $request, Tconsecu $modeloxx)
    {
        $modeloxx->delete();
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Eliminado correctamente');
    }
}
