<?php

namespace App\Http\Controllers\Backend\Administ;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Administ\ActiacceCrearRequest;
use App\Http\Requests\Backend\Administ\ActiacceEdiarRequest;
use App\Models\Actiacce;
use App\Models\Activo;
use App\Traits\Backend\Administ\Actiacce\BActiacceParametrizarTrait;
use App\Traits\Backend\Administ\Actiacce\BActiacceVistasTrait;
use App\Traits\Backend\Administ\BAdministAjaxTrait;
use App\Traits\Backend\Administ\BAdministCrudTrait;
use App\Traits\Backend\Administ\BAdministDataTablesTrait;
use App\Traits\Backend\Administ\BAdministListadosTrait;
use App\Traits\Backend\Administ\BAdministPestaniasTrait;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;

class ActiacceController extends Controller
{
    private $padrexxx=null;
    private $acciones=['crearxxx', 'formulario'];
    use BActiacceParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use BAdministPestaniasTrait; // trait que construye las pestañas que va a tener el modulo con respectiva logica
    use BAdministListadosTrait; // trait que arma las consultas para las datatables
    use BAdministCrudTrait; // trait donde se hace el crud de localidades
    use BAdministDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use BActiacceVistasTrait; // trait que arma la logica para lo metodos: crud
    use BAdministAjaxTrait; // administrar los combos utilizados en las vistas
    use BotonesTrait; // traita arma los botones
    use CombosTrait;
    public function __construct()
    {
        $this->pestania[5][4]=true;
        $this->opciones['permisox'] = 'actiacce';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index($padrexxx)
    {
        $this->pestania[5][2]=[$padrexxx];
        $this->getPestanias([]);
        $this->getBActiacce(['parametr'=>[$padrexxx],'paranuev'=>[$padrexxx]]);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(Activo $padrexxx)
    { 
        $this->opciones['parametr']=[$padrexxx->id];
        $this->padrexxx=$padrexxx;
        $this->getRespuesta(['btnxxxxx' => 'b']);
        return $this->view();
    }


    public function store(ActiacceCrearRequest $request,$padrexxx)
    {
        $request->request->add(['activo_id'=>$padrexxx]);
        return $this->setActiacce([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Acceso creado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }


    public function show(Actiacce $modeloxx)
    {
        $this->padrexxx=$modeloxx->activo;
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['verxxxxx', 'verxxxxx'];
        return $this->view();
    }

    public function edit(Actiacce $modeloxx)
    {
        $this->pestania[6][4]=true;
        $this->pestania[6][2]=[$modeloxx->id];
        $this->padrexxx=$modeloxx->activo;
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['editarxx', 'formulario'];
        $this->getRespuesta(['btnxxxxx' => 'b']);
        $this->getRespuesta(['btnxxxxx' => 'a','tituloxx'=>'ASIGNAR ACTOR','routexxx'=>'acceacto','parametr'=>[$modeloxx->id]]);
        return $this->view();
    }


    public function update(ActiacceEdiarRequest $request,  Actiacce $modeloxx)
    {
        return $this->setActiacce([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Acceso editado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }

    public function inactivate(Actiacce $modeloxx)
    {
        $this->padrexxx=$modeloxx->activo;
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['borrarxx', 'destroyx'];
        $this->getRespuesta(['btnxxxxx' => 'b','tituloxx'=>'ELIMINAR']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['borrarxx', 'destroyx'],]);
    }


    public function destroy(Request $request, Actiacce $modeloxx)
    {
        $padrexxx=$modeloxx->activo_id;
        $modeloxx->delete();
        return redirect()
            ->route($this->opciones['permisox'], [$padrexxx])
            ->with('info', 'Eliminado correctamente');
    }
}
