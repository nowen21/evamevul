<?php

namespace App\Http\Controllers\Backend\Administ\Modvulne;

use App\Http\Controllers\Controller;
use App\Traits\Backend\Administ\Modvulne\BModvulneAjaxTrait;
use App\Traits\Backend\Administ\Modvulne\BModvulneCrudTrait;
use App\Traits\Backend\Administ\Modvulne\BModvulneDataTablesTrait;
use App\Traits\Backend\Administ\Modvulne\BModvulneListadosTrait;
use App\Traits\Backend\Administ\Modvulne\BModvulnePestaniasTrait;
use App\Traits\Backend\Administ\Modvulne\Vulnacti\BVulnactiParametrizarTrait;
use App\Traits\Backend\Administ\Modvulne\Vulnacti\BVulnactiVistasTrait;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;

class VulnactiController extends Controller
{
    private $acciones=['crearxxx', 'formulario'];
    use BVulnactiParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use BModvulnePestaniasTrait; // trait que construye las pestañas que va a tener el modulo con respectiva logica
    use BModvulneListadosTrait; // trait que arma las consultas para las datatables
    use BModvulneCrudTrait; // trait donde se hace el crud de localidades
    use BModvulneDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use BVulnactiVistasTrait; // trait que arma la logica para lo metodos: crud
    use BModvulneAjaxTrait; // administrar los combos utilizados en las vistas
    use BotonesTrait; // traita arma los botones
    use CombosTrait;
    public function __construct()
    {
        $this->opciones['permisox'] = 'vulnacti';
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
        $this->getBVulnacti([]);
        return view($this->opciones['rutacomp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    
}
