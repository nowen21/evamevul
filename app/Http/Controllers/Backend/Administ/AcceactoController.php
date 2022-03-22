<?php

namespace App\Http\Controllers\Backend\Administ;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Administ\AcceactoCrearRequest;
use App\Http\Requests\Backend\Administ\AcceactoEdiarRequest;
use App\Models\Acceacto;
use App\Models\Actiacce;
use App\Traits\Backend\Administ\Acceacto\BAcceactoParametrizarTrait;
use App\Traits\Backend\Administ\Acceacto\BAcceactoVistasTrait;
use App\Traits\Backend\Administ\BAdministAjaxTrait;
use App\Traits\Backend\Administ\BAdministCrudTrait;
use App\Traits\Backend\Administ\BAdministDataTablesTrait;
use App\Traits\Backend\Administ\BAdministListadosTrait;
use App\Traits\Backend\Administ\BAdministPestaniasTrait;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;

class AcceactoController extends Controller
{
    private $padrexxx=null;
    private $acciones=['crearxxx', 'formulario'];
    use BAcceactoParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use BAdministPestaniasTrait; // trait que construye las pestañas que va a tener el modulo con respectiva logica
    use BAdministListadosTrait; // trait que arma las consultas para las datatables
    use BAdministCrudTrait; // trait donde se hace el crud de localidades
    use BAdministDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use BAcceactoVistasTrait; // trait que arma la logica para lo metodos: crud
    use BAdministAjaxTrait; // administrar los combos utilizados en las vistas
    use BotonesTrait; // traita arma los botones
    use CombosTrait;
    public function __construct()
    {
        $this->pestania[5][4]=true;
        $this->pestania[6][4]=true;
        $this->opciones['permisox'] = 'acceacto';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Actiacce $padrexxx)
    {
        $padreidx=$padrexxx->id;
        $this->pestania[5][2]=[$padrexxx->activo_id];
        $this->pestania[6][2]=[$padreidx];
        $this->getPestanias([]);
        $this->getBAcceacto(['parametr'=>[$padreidx],'paranuev'=>[$padreidx]]);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(Actiacce $padrexxx)
    { 
        $this->opciones['parametr']=[$padrexxx->id];
        $this->padrexxx=$padrexxx;
        $this->getRespuesta(['btnxxxxx' => 'b']);
        return $this->view();
    }


    public function store(AcceactoCrearRequest $request,$padrexxx)
    {
        $request->request->add(['actiacce_id'=>$padrexxx]);
        return $this->setAcceacto([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Actor creado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }


    public function show(Acceacto $modeloxx)
    {
        $this->padrexxx=$modeloxx->actiacce;
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['verxxxxx', 'verxxxxx'];
        return $this->view();
    }

    public function edit(Acceacto $modeloxx)
    {
        $this->pestania[7][4]=true;
        $this->pestania[7][2]=[$modeloxx->id];
        $this->padrexxx=$modeloxx->actiacce;
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['editarxx', 'formulario'];
        $this->getRespuesta(['btnxxxxx' => 'b']);
        $this->getRespuesta(['btnxxxxx' => 'a','tituloxx'=>'ASIGNAR MOTIVO','routexxx'=>'actomoti','parametr'=>[$modeloxx->id]]);
        return $this->view();
    }


    public function update(AcceactoEdiarRequest $request,  Acceacto $modeloxx)
    {
        return $this->setAcceacto([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Actor editado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }

    public function inactivate(Acceacto $modeloxx)
    {
        $this->padrexxx=$modeloxx->actiacce;
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['borrarxx', 'destroyx'];
        $this->getRespuesta(['btnxxxxx' => 'b','tituloxx'=>'ELIMINAR']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['borrarxx', 'destroyx'],]);
    }


    public function destroy(Request $request, Acceacto $modeloxx)
    {
        $padrexxx=$modeloxx->actiacce_id;
        $modeloxx->delete();
        return redirect()
            ->route($this->opciones['permisox'], [$padrexxx])
            ->with('info', 'Eliminado correctamente');
    }
}
