<?php

namespace App\Http\Controllers\Backend\Administ\Probabil;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Administ\Probabil\ConsecueCrearRequest;
use App\Http\Requests\Backend\Administ\Probabil\ConsecueEdiarRequest;
use App\Models\Backend\Administ\Probabil\Consecue;
use App\Models\Backend\Administ\Probabil\Tconsecu;
use App\Traits\Backend\Administ\Probabil\BProbabilAjaxTrait;
use App\Traits\Backend\Administ\Probabil\BProbabilCrudTrait;
use App\Traits\Backend\Administ\Probabil\BProbabilDataTablesTrait;
use App\Traits\Backend\Administ\Probabil\BProbabilListadosTrait;
use App\Traits\Backend\Administ\Probabil\BProbabilPestaniasTrait;
use App\Traits\Backend\Administ\Probabil\Consecue\BConsecueParametrizarTrait;
use App\Traits\Backend\Administ\Probabil\Consecue\BConsecueVistasTrait;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;

class ConsecueController extends Controller
{
    private $padrexxx=null;
    private $acciones=['crearxxx', 'formulario'];
    use BConsecueParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use BProbabilPestaniasTrait; // trait que construye las pestañas que va a tener el modulo con respectiva logica
    use BProbabilListadosTrait; // trait que arma las consultas para las datatables
    use BProbabilCrudTrait; // trait donde se hace el crud de localidades
    use BProbabilDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use BConsecueVistasTrait; // trait que arma la logica para lo metodos: crud
    use BProbabilAjaxTrait; // administrar los combos utilizados en las vistas
    use BotonesTrait; // traita arma los botones
    use CombosTrait;
    public function __construct()
    {
        $this->opciones['permisox'] = 'consecue';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Tconsecu $padrexxx)
    {
        $this->padrexxx=$padrexxx;
        $this->getParamPesta();
        $this->getPestanias([]);
        $this->getBConsecue(['parametr'=>[$this->padrexxx->id],'paranuev'=>[$this->padrexxx->id]]);
        return view($this->opciones['rutacomp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tconsecu $padrexxx)
    {
        $this->padrexxx=$padrexxx;
        $this->opciones['parametr']=[$this->padrexxx->id];
        $this->getRespuesta(['btnxxxxx' => 'b']);
        return $this->view();
    }


    public function store(ConsecueCrearRequest $request,$padrexxx)
    {
        $request->request->add(['tconsecu_id'=>$padrexxx]);
        return $this->setConsecue([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Registro creado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }


    public function show(Consecue $modeloxx)
    {
        $this->padrexxx=$modeloxx->tconsecu;
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['verxxxxx', 'verxxxxx'];
        return $this->view();
    }


    public function edit(Consecue $modeloxx)
    {
        $this->padrexxx=$modeloxx->tconsecu;
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['editarxx', 'formulario'];
        $this->getRespuesta(['btnxxxxx' => 'b']);
        $this->getRespuesta(['btnxxxxx' => 'a','tituloxx'=>'ASIGNAR PROBABILIDAD','routexxx'=>'consprob','parametr'=>[$modeloxx->id]]);
        return $this->view();
    }


    public function update(ConsecueEdiarRequest $request,  Consecue $modeloxx)
    {
        return $this->setConsecue([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Registro actualizado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }

    public function inactivate(Consecue $modeloxx)
    {
        $this->padrexxx=$modeloxx->tconsecu;
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['borrarxx', 'destroyx'];
        $this->getRespuesta(['btnxxxxx' => 'b','tituloxx'=>'INACTIVAR']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['borrarxx', 'destroyx'],]);
    }


    public function destroy(Request $request, Consecue $modeloxx)
    {
        $auxiliar=$modeloxx->id;
        $modeloxx->delete();
        return redirect()
            ->route($this->opciones['permisox'], [$auxiliar])
            ->with('info', 'Eliminado correctamente');
    }
}
