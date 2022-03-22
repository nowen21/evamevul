<?php

namespace App\Http\Controllers\Backend\Administ\Probabil;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Administ\Probabil\ConsprobCrearRequest;
use App\Http\Requests\Backend\Administ\Probabil\ConsprobEdiarRequest;
use App\Models\Backend\Administ\Probabil\Consecue;
use App\Models\Backend\Administ\Probabil\Consprob;
use App\Traits\Backend\Administ\Probabil\BProbabilAjaxTrait;
use App\Traits\Backend\Administ\Probabil\BProbabilCrudTrait;
use App\Traits\Backend\Administ\Probabil\BProbabilDataTablesTrait;
use App\Traits\Backend\Administ\Probabil\BProbabilListadosTrait;
use App\Traits\Backend\Administ\Probabil\BProbabilPestaniasTrait;
use App\Traits\Backend\Administ\Probabil\Consprob\BConsprobParametrizarTrait;
use App\Traits\Backend\Administ\Probabil\Consprob\BConsprobVistasTrait;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;

class ConsprobController extends Controller 
{
    private $padrexxx=null;
    private $acciones=['crearxxx', 'formulario'];
    use BConsprobParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use BProbabilPestaniasTrait; // trait que construye las pestañas que va a tener el modulo con respectiva logica
    use BProbabilListadosTrait; // trait que arma las consultas para las datatables
    use BProbabilCrudTrait; // trait donde se hace el crud de localidades
    use BProbabilDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use BConsprobVistasTrait; // trait que arma la logica para lo metodos: crud
    use BProbabilAjaxTrait; // administrar los combos utilizados en las vistas
    use BotonesTrait; // traita arma los botones
    use CombosTrait;
    public function __construct()
    {
        $this->opciones['permisox'] = 'consprob';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Consecue $padrexxx)
    {
        $this->padrexxx=$padrexxx;
        $this->getParamPesta();
        $this->getPestanias([]);
        $this->getBConsprob(['parametr'=>$this->padrexxx->id,'paranuev'=>$this->padrexxx->id]);
        return view($this->opciones['rutacomp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Consecue $padrexxx)
    {
        $this->padrexxx=$padrexxx;
        $this->opciones['parametr'] = [$this->padrexxx->id];
        $this->getRespuesta(['btnxxxxx' => 'b']);
        return $this->view();
    }


    public function store(ConsprobCrearRequest $request,$padrexxx)
    {
        $request->request->add(['consecue_id'=>$padrexxx]);
        return $this->setConsprob([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Registro creado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }


    public function show(Consprob $modeloxx)
    {
        $this->padrexxx=$modeloxx->consecue;
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['verxxxxx', 'verxxxxx'];
        return $this->view();
    }


    public function edit(Consprob $modeloxx)
    {
        $this->padrexxx=$modeloxx->consecue;
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['editarxx', 'formulario'];
        $this->getRespuesta(['btnxxxxx' => 'b']);
        return $this->view();
    }


    public function update(ConsprobEdiarRequest $request,  Consprob $modeloxx)
    {
        return $this->setConsprob([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Registro actualizado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }

    public function inactivate(Consprob $modeloxx)
    {
        $this->padrexxx=$modeloxx->consecue;
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['borrarxx', 'destroyx'];
        $this->getRespuesta(['btnxxxxx' => 'b','tituloxx'=>'ELIMINAR']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['borrarxx', 'destroyx'],]);
    }


    public function destroy(Request $request, Consprob $modeloxx)
    {
        $modeloxx->delete();
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Eliminado correctamente');
    }
}
