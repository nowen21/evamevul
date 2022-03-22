<?php

namespace App\Http\Controllers\Frontend\Welcomex;

use App\Http\Controllers\Controller;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;
use App\Traits\Frontend\Welcomex\FWelcomexAjaxTrait;
use App\Traits\Frontend\Welcomex\FWelcomexCrudTrait;
use App\Traits\Frontend\Welcomex\FWelcomexDataTablesTrait;
use App\Traits\Frontend\Welcomex\FWelcomexListadosTrait;
use App\Traits\Frontend\Welcomex\FWelcomexPestaniasTrait;
use App\Traits\Frontend\Welcomex\Welcomex\FWelcomexParametrizarTrait;
use App\Traits\Frontend\Welcomex\Welcomex\FWelcomexVistasTrait;
use Illuminate\Http\Request;


class FWelcomexController extends Controller
{
    // use MigracionTrait;
    use FWelcomexParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use FWelcomexPestaniasTrait; // trait que construye las pestañas que va a tener el modulo con respectiva logica
    use FWelcomexListadosTrait; // trait que arma las consultas para las datatables
    use FWelcomexCrudTrait; // trait donde se hace el crud de localidades
    use FWelcomexDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use FWelcomexVistasTrait; // trait que arma la logica para lo metodos: crud
    use FWelcomexAjaxTrait; // administrar los combos utilizados en las vistas
    use BotonesTrait; // traita arma los botones
    use CombosTrait;
    public function __construct()
    {
        $this->opciones['permisox'] = 'welcomex';
        $this->getOpciones();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $this->opciones['combosxx']  = [
            'activoxx' => $this->getActivosCT(['selected' => []]),
            'accesoxx' => ['' => 'Seleccione'],
            'actorxxx' => ['' => 'Seleccione'],
            'motivoxx' => ['' => 'Seleccione'],
            'vulnerab' => ['' => 'Seleccione'],
            'actorxxx' => ['' => 'Seleccione'],
            'herramie' => ['' => 'Seleccione'],
        ];
        $this->getPestanias([]);
        $this->getTablaWelcomex([]);
        // return view($this->opciones['rutacomp'].'pestanias', ['todoxxxx' => $this->opciones]);
        return view($this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Pestanias.pestanias', ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
