<?php

namespace App\Http\Controllers\Backend\Administ;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Administ\ActomotiCrearRequest;
use App\Http\Requests\Backend\Administ\ActomotiEdiarRequest;
use App\Models\Actomoti;
use App\Models\Acceacto;
use App\Traits\Backend\Administ\Actomoti\BActomotiParametrizarTrait;
use App\Traits\Backend\Administ\Actomoti\BActomotiVistasTrait;
use App\Traits\Backend\Administ\BAdministAjaxTrait;
use App\Traits\Backend\Administ\BAdministCrudTrait;
use App\Traits\Backend\Administ\BAdministDataTablesTrait;
use App\Traits\Backend\Administ\BAdministListadosTrait;
use App\Traits\Backend\Administ\BAdministPestaniasTrait;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;

class ActomotiController extends Controller
{
    private $padrexxx=null;
    private $acciones=['crearxxx', 'formulario'];
    use BActomotiParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use BAdministPestaniasTrait; // trait que construye las pestañas que va a tener el modulo con respectiva logica
    use BAdministListadosTrait; // trait que arma las consultas para las datatables
    use BAdministCrudTrait; // trait donde se hace el crud de localidades
    use BAdministDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use BActomotiVistasTrait; // trait que arma la logica para lo metodos: crud
    use BAdministAjaxTrait; // administrar los combos utilizados en las vistas
    use BotonesTrait; // traita arma los botones
    use CombosTrait;
    public function __construct()
    {
        $this->pestania[5][4]=true;
        $this->pestania[6][4]=true;
        $this->pestania[7][4]=true;
        $this->opciones['permisox'] = 'actomoti';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Acceacto $padrexxx)
    {
        $padreidx=$padrexxx->id;
        $this->pestania[5][2]=[$padrexxx->actiacce->activo_id];
        $this->pestania[6][2]=[$padrexxx->actiacce_id];
        $this->pestania[7][2]=[$padreidx];
        $this->getPestanias([]);
        $this->getBActomoti(['parametr'=>[$padreidx],'paranuev'=>[$padreidx]]);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(Acceacto $padrexxx)
    { 
        $this->opciones['parametr']=[$padrexxx->id];
        $this->padrexxx=$padrexxx;
        $this->getRespuesta(['btnxxxxx' => 'b']);
        return $this->view();
    }


    public function store(ActomotiCrearRequest $request,$padrexxx)
    {
        $request->request->add(['acceacto_id'=>$padrexxx]);
        return $this->setActomoti([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Motivo creado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }


    public function show(Actomoti $modeloxx)
    {
        $this->padrexxx=$modeloxx->acceacto;
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['verxxxxx', 'verxxxxx'];
        return $this->view();
    }

    public function edit(Actomoti $modeloxx)
    {
        $this->pestania[8][4]=true;
        $this->pestania[8][2]=[$modeloxx->id];
        $this->padrexxx=$modeloxx->acceacto;
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['editarxx', 'formulario'];
        $this->getRespuesta(['btnxxxxx' => 'b']);
        $this->getRespuesta(['btnxxxxx' => 'a','tituloxx'=>'ASIGNAR RESULTADO','routexxx'=>'motiresu','parametr'=>[$modeloxx->id]]);
        return $this->view();
    }


    public function update(ActomotiEdiarRequest $request,  Actomoti $modeloxx)
    {
        return $this->setActomoti([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Motivo editado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }

    public function inactivate(Actomoti $modeloxx)
    {
        $this->padrexxx=$modeloxx->acceacto;
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['borrarxx', 'destroyx'];
        $this->getRespuesta(['btnxxxxx' => 'b','tituloxx'=>'ELIMINAR']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['borrarxx', 'destroyx'],]);
    }


    public function destroy(Request $request, Actomoti $modeloxx)
    {
        $padrexxx=$modeloxx->acceacto_id;
        $modeloxx->delete();
        return redirect()
            ->route($this->opciones['permisox'], [$padrexxx])
            ->with('info', 'Eliminado correctamente');
    }
}
