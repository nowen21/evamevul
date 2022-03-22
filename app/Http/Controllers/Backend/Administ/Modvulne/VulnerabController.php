<?php

namespace App\Http\Controllers\Backend\Administ\Modvulne;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Administ\Modvulne\VulnerabCrearRequest;
use App\Http\Requests\Backend\Administ\Modvulne\VulnerabEdiarRequest;
use App\Models\Activo;
use App\Models\Backend\Administ\Modvulne\Vulnerab;
use App\Traits\Backend\Administ\Modvulne\BModvulneAjaxTrait;
use App\Traits\Backend\Administ\Modvulne\BModvulneCrudTrait;
use App\Traits\Backend\Administ\Modvulne\BModvulneDataTablesTrait;
use App\Traits\Backend\Administ\Modvulne\BModvulneListadosTrait;
use App\Traits\Backend\Administ\Modvulne\BModvulnePestaniasTrait;
use App\Traits\Backend\Administ\Modvulne\Vulnerab\BVulnerabParametrizarTrait;
use App\Traits\Backend\Administ\Modvulne\Vulnerab\BVulnerabVistasTrait;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;

class VulnerabController extends Controller
{
    private $padrexxx=null;
    private $acciones=['crearxxx', 'formulario'];
    use BVulnerabParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use BModvulnePestaniasTrait; // trait que construye las pestañas que va a tener el modulo con respectiva logica
    use BModvulneListadosTrait; // trait que arma las consultas para las datatables
    use BModvulneCrudTrait; // trait donde se hace el crud de localidades
    use BModvulneDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use BVulnerabVistasTrait; // trait que arma la logica para lo metodos: crud
    use BModvulneAjaxTrait; // administrar los combos utilizados en las vistas
    use BotonesTrait; // traita arma los botones
    use CombosTrait;
    public function __construct()
    {
        $this->opciones['permisox'] = 'vulnerab';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Activo $padrexxx)
    {
        $this->padrexxx=$padrexxx;
        $this->getParamPesta();
        $this->getPestanias([]);
        $this->getBVulnerab(['parametr'=>[$this->padrexxx->id],'paranuev'=>[$this->padrexxx->id]]);
        return view($this->opciones['rutacomp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Activo $padrexxx)
    {
        $this->padrexxx=$padrexxx;
        $this->opciones['parametr']=[$this->padrexxx->id];
        $this->getRespuesta(['btnxxxxx' => 'b']);
        return $this->view();
    }


    public function store(VulnerabCrearRequest $request,$padrexxx)
    {
        $request->request->add(['activo_id'=>$padrexxx]);
        return $this->setVulnerab([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Registro creado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }


    public function show(Vulnerab $modeloxx)
    {
        $this->padrexxx=$modeloxx->activo;
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['verxxxxx', 'verxxxxx'];
        return $this->view();
    }


    public function edit(Vulnerab $modeloxx)
    {
        $this->padrexxx=$modeloxx->activo;
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['editarxx', 'formulario'];
        $this->getRespuesta(['btnxxxxx' => 'b']);
        $this->getRespuesta(['btnxxxxx' => 'a','tituloxx'=>'ASIGNAR ACTOR','routexxx'=>'vulnacto','parametr'=>[$modeloxx->id]]);
        return $this->view();
    }


    public function update(VulnerabEdiarRequest $request,  Vulnerab $modeloxx)
    {
        return $this->setVulnerab([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Registro actualizado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }

    public function inactivate(Vulnerab $modeloxx)
    {
        $this->padrexxx=$modeloxx->activo;
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['borrarxx', 'destroyx'];
        $this->getRespuesta(['btnxxxxx' => 'b','tituloxx'=>'INACTIVAR']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['borrarxx', 'destroyx'],]);
    }


    public function destroy(Request $request, Vulnerab $modeloxx)
    {
        $auxiliar=$modeloxx->id;
        $modeloxx->delete();
        return redirect()
            ->route($this->opciones['permisox'], [$auxiliar])
            ->with('info', 'Eliminado correctamente');
    }
}
