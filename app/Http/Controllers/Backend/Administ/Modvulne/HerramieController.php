<?php

namespace App\Http\Controllers\Backend\Administ\Modvulne;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Administ\Modvulne\HerramieCrearRequest;
use App\Http\Requests\Backend\Administ\Modvulne\HerramieEdiarRequest;
use App\Models\Backend\Administ\Modvulne\Herramie;
use App\Traits\Backend\Administ\Modvulne\BModvulneAjaxTrait;
use App\Traits\Backend\Administ\Modvulne\BModvulneCrudTrait;
use App\Traits\Backend\Administ\Modvulne\BModvulneDataTablesTrait;
use App\Traits\Backend\Administ\Modvulne\BModvulneListadosTrait;
use App\Traits\Backend\Administ\Modvulne\BModvulnePestaniasTrait;
use App\Traits\Backend\Administ\Modvulne\Herramie\BHerramieParametrizarTrait;
use App\Traits\Backend\Administ\Modvulne\Herramie\BHerramieVistasTrait;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;

class HerramieController extends Controller
{
    private $acciones=['crearxxx', 'formulario'];
    use BHerramieParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use BModvulnePestaniasTrait; // trait que construye las pestañas que va a tener el modulo con respectiva logica
    use BModvulneListadosTrait; // trait que arma las consultas para las datatables
    use BModvulneCrudTrait; // trait donde se hace el crud de localidades
    use BModvulneDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use BHerramieVistasTrait; // trait que arma la logica para lo metodos: crud
    use BModvulneAjaxTrait; // administrar los combos utilizados en las vistas
    use BotonesTrait; // traita arma los botones
    use CombosTrait;
    public function __construct()
    {
        $this->opciones['permisox'] = 'herramie';
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
        $this->getBHerramie([]);
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


    public function store(HerramieCrearRequest $request)
    {
        return $this->setHerramie([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Registro creado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }


    public function show(Herramie $modeloxx)
    {
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['verxxxxx', 'verxxxxx'];
        return $this->view();
    }


    public function edit(Herramie $modeloxx)
    {
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['editarxx', 'formulario'];
        $this->getRespuesta(['btnxxxxx' => 'b']);
        
        return $this->view();
    }


    public function update(HerramieEdiarRequest $request,  Herramie $modeloxx)
    {
        return $this->setHerramie([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Registro actualizado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }

    public function inactivate(Herramie $modeloxx)
    {
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['borrarxx', 'destroyx'];
        $this->getRespuesta(['btnxxxxx' => 'b','tituloxx'=>'ELIMINAR']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['borrarxx', 'destroyx'],]);
    }


    public function destroy(Request $request, Herramie $modeloxx)
    {
        $modeloxx->delete();
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Eliminado correctamente');
    }
}
