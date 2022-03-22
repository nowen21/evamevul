<?php

namespace App\Http\Controllers\Backend\Administ\Probabil;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Administ\Probabil\ProbabilCrearRequest;
use App\Http\Requests\Backend\Administ\Probabil\ProbabilEdiarRequest;
use App\Models\Backend\Administ\Probabil\Probabil;
use App\Models\Backend\Administ\Probabil\Tipoprob;
use App\Traits\Backend\Administ\Probabil\BProbabilAjaxTrait;
use App\Traits\Backend\Administ\Probabil\BProbabilCrudTrait;
use App\Traits\Backend\Administ\Probabil\BProbabilDataTablesTrait;
use App\Traits\Backend\Administ\Probabil\BProbabilListadosTrait;
use App\Traits\Backend\Administ\Probabil\BProbabilPestaniasTrait;
use App\Traits\Backend\Administ\Probabil\Probabil\BProbabilParametrizarTrait;
use App\Traits\Backend\Administ\Probabil\Probabil\BProbabilVistasTrait;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;

class ProbabilController extends Controller
{
    private $padrexxx=null;
    private $acciones=['crearxxx', 'formulario'];
    use BProbabilParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use BProbabilPestaniasTrait; // trait que construye las pestañas que va a tener el modulo con respectiva logica
    use BProbabilListadosTrait; // trait que arma las consultas para las datatables
    use BProbabilCrudTrait; // trait donde se hace el crud de localidades
    use BProbabilDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use BProbabilVistasTrait; // trait que arma la logica para lo metodos: crud
    use BProbabilAjaxTrait; // administrar los combos utilizados en las vistas
    use BotonesTrait; // traita arma los botones
    use CombosTrait;
    public function __construct()
    {
        $this->opciones['permisox'] = 'probabil';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Tipoprob $padrexxx)
    {
        $this->padrexxx=$padrexxx;
        $this->getParamPesta();
        $this->getPestanias([]);
        $this->getBProbabil(['parametr'=>[$this->padrexxx->id],'paranuev'=>[$this->padrexxx->id]]);
        return view($this->opciones['rutacomp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tipoprob $padrexxx)
    {
        $this->padrexxx=$padrexxx;
        $this->opciones['parametr']=[$this->padrexxx->id];
        $this->getRespuesta(['btnxxxxx' => 'b']);
        return $this->view();
    }


    public function store(ProbabilCrearRequest $request,$padrexxx)
    {
        $request->request->add(['tipoprob_id'=>$padrexxx]);
        return $this->setProbabil([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Registro creado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }


    public function show(Probabil $modeloxx)
    {
        $this->padrexxx=$modeloxx->tipoprob;
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['verxxxxx', 'verxxxxx'];
        return $this->view();
    }


    public function edit(Probabil $modeloxx)
    {
        $this->padrexxx=$modeloxx->tipoprob;
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['editarxx', 'formulario'];
        $this->getRespuesta(['btnxxxxx' => 'b']);
        return $this->view();
    }


    public function update(ProbabilEdiarRequest $request,  Probabil $modeloxx)
    {
        $request->request->add(['tipoprob_id'=>$modeloxx->tipoprob_id]);
        return $this->setProbabil([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Registro actualizado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }

    public function inactivate(Probabil $modeloxx)
    {
        $this->padrexxx=$modeloxx->tipoprob;
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['borrarxx', 'destroyx'];
        $this->getRespuesta(['btnxxxxx' => 'b','tituloxx'=>'ELIMINAR']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['borrarxx', 'destroyx'],]);
    }


    public function destroy(Request $request, Probabil $modeloxx)
    {
        $mensajex = 'El nivel nos se puede eliminar debido a que ya se encuentra asociado a un resultado, elimine dicha asociación para pederlo eliminar';
        if ($modeloxx->resuimpas()->count() == 0) {
            $mensajex = 'Eliminado correctamente';
            $modeloxx->delete();
        }
        $auxiliar=$modeloxx->tipoprob_id;
        return redirect()
            ->route($this->opciones['permisox'], [$auxiliar])
            ->with('info',  $mensajex);
    }
}
