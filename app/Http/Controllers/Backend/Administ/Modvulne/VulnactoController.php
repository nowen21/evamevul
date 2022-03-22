<?php

namespace App\Http\Controllers\Backend\Administ\Modvulne;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Administ\Modvulne\VulnactoCrearRequest;
use App\Http\Requests\Backend\Administ\Modvulne\VulnactoEdiarRequest;
use App\Models\Activo;
use App\Models\Backend\Administ\Modvulne\Vulnacto;
use App\Models\Backend\Administ\Modvulne\Vulnerab;
use App\Traits\Backend\Administ\Modvulne\BModvulneAjaxTrait;
use App\Traits\Backend\Administ\Modvulne\BModvulneCrudTrait;
use App\Traits\Backend\Administ\Modvulne\BModvulneDataTablesTrait;
use App\Traits\Backend\Administ\Modvulne\BModvulneListadosTrait;
use App\Traits\Backend\Administ\Modvulne\BModvulnePestaniasTrait;
use App\Traits\Backend\Administ\Modvulne\Vulnacto\BVulnactoParametrizarTrait;
use App\Traits\Backend\Administ\Modvulne\Vulnacto\BVulnactoVistasTrait;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;

class VulnactoController extends Controller
{
    private $padrexxx=null;
    private $acciones=['crearxxx', 'formulario'];
    use BVulnactoParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use BModvulnePestaniasTrait; // trait que construye las pestañas que va a tener el modulo con respectiva logica
    use BModvulneListadosTrait; // trait que arma las consultas para las datatables
    use BModvulneCrudTrait; // trait donde se hace el crud de localidades
    use BModvulneDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use BVulnactoVistasTrait; // trait que arma la logica para lo metodos: crud
    use BModvulneAjaxTrait; // administrar los combos utilizados en las vistas
    use BotonesTrait; // traita arma los botones
    use CombosTrait;
    public function __construct()
    {
        $this->opciones['permisox'] = 'vulnacto';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Vulnerab $padrexxx)
    {
        $this->padrexxx=$padrexxx;
        $this->getParamPesta();
        $this->getPestanias([]);
        $this->getBVulnacto(['parametr'=>[$this->padrexxx->id],'paranuev'=>[$this->padrexxx->id]]);
        return view($this->opciones['rutacomp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Vulnerab $padrexxx)
    {
        $this->padrexxx=$padrexxx;
        $this->opciones['parametr']=[$this->padrexxx->id];
        $this->getRespuesta(['btnxxxxx' => 'b']);
        return $this->view();
    }


    public function store(VulnactoCrearRequest $request,$padrexxx)
    {
        $request->request->add(['vulnerab_id'=>$padrexxx]);
        return $this->setVulnacto([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Registro creado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }


    public function show(Vulnacto $modeloxx)
    {
        $this->padrexxx=$modeloxx->vulnerab;
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['verxxxxx', 'verxxxxx'];
        return $this->view();
    }


    public function edit(Vulnacto $modeloxx)
    {
        $this->padrexxx=$modeloxx->vulnerab;
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['editarxx', 'formulario'];
        $this->getRespuesta(['btnxxxxx' => 'b']);
        $this->getRespuesta(['btnxxxxx' => 'a','tituloxx'=>'ASIGNAR HERAMIENTA','routexxx'=>'actoherr','parametr'=>[$modeloxx->id]]);
        return $this->view();
    }


    public function update(VulnactoEdiarRequest $request,  Vulnacto $modeloxx)
    {
        return $this->setVulnacto([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Registro actualizado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }

    public function inactivate(Vulnacto $modeloxx)
    {
        $this->padrexxx=$modeloxx->vulnerab;
        $this->opciones['modeloxx']=$modeloxx;
        $this->acciones=['borrarxx', 'destroyx'];
        $this->getRespuesta(['btnxxxxx' => 'b','tituloxx'=>'INACTIVAR']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['borrarxx', 'destroyx'],]);
    }


    public function destroy(Request $request, Vulnacto $modeloxx)
    {
        $auxiliar=$modeloxx->vulnerab_id;
        $modeloxx->delete();
        return redirect()
            ->route($this->opciones['permisox'], [$auxiliar])
            ->with('info', 'Eliminado correctamente');
    }
}
