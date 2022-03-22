<?php

namespace App\Http\Controllers\Backend\Administ\Modvulne;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Administ\Modvulne\ActoherrCrearRequest;
use App\Http\Requests\Backend\Administ\Modvulne\ActoherrEdiarRequest;
use App\Models\Backend\Administ\Modvulne\Actoherr;
use App\Models\Backend\Administ\Modvulne\Vulnacto;
use App\Traits\Backend\Administ\Modvulne\BModvulneAjaxTrait;
use App\Traits\Backend\Administ\Modvulne\BModvulneCrudTrait;
use App\Traits\Backend\Administ\Modvulne\BModvulneDataTablesTrait;
use App\Traits\Backend\Administ\Modvulne\BModvulneListadosTrait;
use App\Traits\Backend\Administ\Modvulne\BModvulnePestaniasTrait;
use App\Traits\Backend\Administ\Modvulne\Actoherr\BActoherrParametrizarTrait;
use App\Traits\Backend\Administ\Modvulne\Actoherr\BActoherrVistasTrait;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;

class ActoherrController extends Controller
{
    private $padrexxx=null;
    private $acciones=['crearxxx', 'formulario'];
    use BActoherrParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use BModvulnePestaniasTrait; // trait que construye las pestañas que va a tener el modulo con respectiva logica
    use BModvulneListadosTrait; // trait que arma las consultas para las datatables
    use BModvulneCrudTrait; // trait donde se hace el crud de localidades
    use BModvulneDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use BActoherrVistasTrait; // trait que arma la logica para lo metodos: crud
    use BModvulneAjaxTrait; // administrar los combos utilizados en las vistas
    use BotonesTrait; // traita arma los botones
    use CombosTrait;
    public function __construct()
    {
        $this->opciones['permisox'] = 'actoherr';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Vulnacto $padrexxx)
    {
        $this->padrexxx=$padrexxx;
        $this->getParamPesta();
        $this->getPestanias([]);
        $this->getBActoherr(['parametr'=>[$this->padrexxx->id],'paranuev'=>[$this->padrexxx->id]]);
        return view($this->opciones['rutacomp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Vulnacto $padrexxx)
    {
        $this->padrexxx=$padrexxx;
        $this->opciones['parametr']=[$this->padrexxx->id];
        $this->getRespuesta(['btnxxxxx' => 'b']);
        return $this->view();
    }


    public function store(ActoherrCrearRequest $request,$padrexxx)
    {
        $request->request->add(['vulnacto_id'=>$padrexxx]);
        return $this->setActoherr([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Registro creado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }


    public function show(Actoherr $modeloxx)
    {
        $this->padrexxx=$modeloxx->vulnacto;
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['verxxxxx', 'verxxxxx'];
        return $this->view();
    }


    public function edit(Actoherr $modeloxx)
    {
        $this->padrexxx=$modeloxx->vulnacto;
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['editarxx', 'formulario'];
        $this->getRespuesta(['btnxxxxx' => 'b']);
        return $this->view();
    }


    public function update(ActoherrEdiarRequest $request,  Actoherr $modeloxx)
    {
        return $this->setActoherr([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Registro actualizado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }

    public function inactivate(Actoherr $modeloxx)
    {
        $this->padrexxx=$modeloxx->vulnacto;
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['borrarxx', 'destroyx'];
        $this->getRespuesta(['btnxxxxx' => 'b','tituloxx'=>'INACTIVAR']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['borrarxx', 'destroyx'],]);
    }


    public function destroy(Request $request, Actoherr $modeloxx)
    {
        $auxiliar=$modeloxx->vulnacto_id;
        $modeloxx->delete();
        return redirect()
            ->route($this->opciones['permisox'], [$auxiliar])
            ->with('info', 'Eliminado correctamente');
    }
}
