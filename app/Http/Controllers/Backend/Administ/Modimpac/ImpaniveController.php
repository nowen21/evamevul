<?php

namespace App\Http\Controllers\Backend\Administ\Modimpac;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Administ\Modimpac\ImpactoCrearRequest;
use App\Http\Requests\Backend\Administ\Modimpac\ImpactoEdiarRequest;
use App\Http\Requests\Backend\Administ\Modimpac\ImpaniveCrearRequest;
use App\Http\Requests\Backend\Administ\Modimpac\ImpaniveEdiarRequest;
use App\Models\Backend\Impactox\Impacto;
use App\Models\Backend\Impactox\Impanive;
use App\Models\Backend\Impactox\Impasuma;
use App\Models\Backend\Impactox\Nivel;
use App\Models\Backend\Impactox\Resuimpa;
use App\Models\Motiresu;
use App\Traits\Backend\Administ\Modimpac\BModimpacAjaxTrait;
use App\Traits\Backend\Administ\Modimpac\BModimpacCrudTrait;
use App\Traits\Backend\Administ\Modimpac\BModimpacDataTablesTrait;
use App\Traits\Backend\Administ\Modimpac\BModimpacListadosTrait;
use App\Traits\Backend\Administ\Modimpac\BModimpacPestaniasTrait;
use App\Traits\Backend\Administ\Modimpac\Impactox\BImpactoxParametrizarTrait;
use App\Traits\Backend\Administ\Modimpac\Impactox\BImpactoxVistasTrait;
use App\Traits\Backend\Administ\Modimpac\Impanive\BImpaniveParametrizarTrait;
use App\Traits\Backend\Administ\Modimpac\Impanive\BImpaniveVistasTrait;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;

use Illuminate\Http\Request;


class ImpaniveController extends Controller
{
    private $padrexxx = null;
    private $acciones = ['crearxxx', 'formulario'];
    // use MigracionTrait;
    use BImpaniveParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use BModimpacPestaniasTrait; // trait que construye las pestañas que va a tener el modulo con respectiva logica
    use BModimpacListadosTrait; // trait que arma las consultas para las datatables
    use BModimpacCrudTrait; // trait donde se hace el crud de localidades
    use BModimpacDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use BImpaniveVistasTrait; // trait que arma la logica para lo metodos: crud
    use BModimpacAjaxTrait; // administrar los combos utilizados en las vistas
    use BotonesTrait; // traita arma los botones
    use CombosTrait;
    public function __construct()
    {
        $this->opciones['permisox'] = 'impanive';
        $this->getOpciones();
    }



    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Impacto $padrexxx)
    {
        $this->padrexxx = $padrexxx;
        $this->getParamPesta();
        $this->getPestanias([]);
        $this->getTablaImpanive(['parametr' => $this->padrexxx->id, 'paranuev' => $this->padrexxx->id]);
        return view($this->opciones['pestanix'], ['todoxxxx' => $this->opciones]);
    }

    public function create(Impacto $padrexxx)
    {
        $this->padrexxx = $padrexxx;
        $this->opciones['parametr'] = $this->padrexxx->id;
        $this->getRespuesta(['btnxxxxx' => 'b']);
        return $this->view();
    }


    public function store(ImpaniveCrearRequest $request, $padrexxx)
    {
        $request->request->add(['impacto_id' => $padrexxx]);
        return $this->setImpanive([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Registro creado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }


    public function show(Impanive $modeloxx)
    {
        $this->padrexxx = $modeloxx->impacto;
        $this->opciones['modeloxx'] = $modeloxx;
        $this->acciones = ['verxxxxx', 'verxxxxx'];
        return $this->view();
    }


    public function edit(Impanive $modeloxx)
    {
        $this->padrexxx = $modeloxx->impacto;
        $this->opciones['modeloxx'] = $modeloxx;
        $this->acciones = ['editarxx', 'formulario'];
        $this->getRespuesta(['btnxxxxx' => 'b']);
        return $this->view();
    }


    public function update(ImpaniveEdiarRequest $request,  Impanive $modeloxx)
    {
        $request->request->add(['impacto_id' => $modeloxx->impacto_id]);
        return $this->setImpanive([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Registro actualizado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }

    public function inactivate(Impanive $modeloxx)
    {
        $this->padrexxx = $modeloxx->impacto;
        $this->opciones['modeloxx'] = $modeloxx;
        $this->acciones = ['borrarxx', 'destroyx'];
        $this->getRespuesta(['btnxxxxx' => 'b', 'tituloxx' => 'ELIMINAR']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['borrarxx', 'destroyx'],]);
    }


    public function destroy(Request $request, Impanive $modeloxx)
    {
        $mensajex = 'El nivel nos se puede eliminar debido a que ya se encuentra asociado a un resultado, elimine dicha asociación para pederlo eliminar';
        if ($modeloxx->resuimpas()->count() == 0) {
            $mensajex = 'Eliminado correctamente';
            $modeloxx->delete();
        }
        $auxiliar = $modeloxx->impacto_id;

        return redirect()
            ->route($this->opciones['permisox'], [$auxiliar])
            ->with('info', $mensajex);
    }
}
