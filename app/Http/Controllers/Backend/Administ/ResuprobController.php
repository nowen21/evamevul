<?php

namespace App\Http\Controllers\Backend\Administ;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Administ\ResuprobCrearRequest;
use App\Http\Requests\Backend\Administ\ResuprobEdiarRequest;
use App\Models\Backend\Administ\Probabil\Resuprob;
use App\Models\Motiresu;
use App\Traits\Backend\Administ\Resuprob\BResuprobParametrizarTrait;
use App\Traits\Backend\Administ\Resuprob\BResuprobVistasTrait;
use App\Traits\Backend\Administ\BAdministAjaxTrait;
use App\Traits\Backend\Administ\BAdministCrudTrait;
use App\Traits\Backend\Administ\BAdministDataTablesTrait;
use App\Traits\Backend\Administ\BAdministListadosTrait;
use App\Traits\Backend\Administ\BAdministPestaniasTrait;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;

class ResuprobController extends Controller
{
    private $padrexxx=null;
    private $acciones=['crearxxx', 'formulario'];
    use BResuprobParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use BAdministPestaniasTrait; // trait que construye las pestañas que va a tener el modulo con respectiva logica
    use BAdministListadosTrait; // trait que arma las consultas para las datatables
    use BAdministCrudTrait; // trait donde se hace el crud de localidades
    use BAdministDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use BResuprobVistasTrait; // trait que arma la logica para lo metodos: crud
    use BAdministAjaxTrait; // administrar los combos utilizados en las vistas
    use BotonesTrait; // traita arma los botones
    use CombosTrait;
    public function __construct()
    {
        $this->opciones['permisox'] = 'resuprob';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Motiresu $padrexxx)
    {
        $padreidx=$padrexxx->id;
        $this->getParamPesta($padrexxx);
        $this->getPestanias([]);
        $this->getBResuprob(['parametr'=>[$padreidx],'paranuev'=>[$padreidx]]);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(Motiresu $padrexxx)
    { 
        $this->opciones['parametr']=[$padrexxx->id];
        $this->padrexxx=$padrexxx;
        $this->getRespuesta(['btnxxxxx' => 'b']);
        return $this->view();
    }


    public function store(ResuprobCrearRequest $request,$padrexxx)
    {
        $request->request->add(['motiresu_id'=>$padrexxx]);
        return $this->setResuprob([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Motivo creado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }


    public function show(Resuprob $modeloxx)
    {
        $this->padrexxx=$modeloxx->motiresu;
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['verxxxxx', 'verxxxxx'];
        return $this->view();
    }

    public function edit(Resuprob $modeloxx)
    {
        $this->padrexxx=$modeloxx->motiresu;
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['editarxx', 'formulario'];
        $this->getRespuesta(['btnxxxxx' => 'b']);
        return $this->view();
    }


    public function update(ResuprobEdiarRequest $request,  Resuprob $modeloxx)
    {
        return $this->setResuprob([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Motivo editado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }

    public function inactivate(Resuprob $modeloxx)
    {
        $this->padrexxx=$modeloxx->motiresu;
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['borrarxx', 'destroyx'];
        $this->getRespuesta(['btnxxxxx' => 'b','tituloxx'=>'ELIMINAR']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['borrarxx', 'destroyx'],]);
    }


    public function destroy(Request $request, Resuprob $modeloxx)
    {
        $padrexxx=$modeloxx->motiresu_id;
        $modeloxx->delete();
        return redirect()
            ->route($this->opciones['permisox'], [$padrexxx])
            ->with('info', 'Eliminado correctamente');
    }
}
