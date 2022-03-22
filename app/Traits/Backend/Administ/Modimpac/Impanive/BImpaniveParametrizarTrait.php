<?php

namespace App\Traits\Backend\Administ\Modimpac\Impanive;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait BImpaniveParametrizarTrait
{

    private $opciones = [
        'modeloxx' => null,
        'botoform' => [],
    ];
    /**
     * permisos del middleware
     *

     * @return $usuariox
     */
    public function getMware()
    {
        $permisos = ['permission:'
            . $this->opciones['permisox'] . '-leerxxxx|'
            . $this->opciones['permisox'] . '-crearxxx|'
            . $this->opciones['permisox'] . '-editarxx|'
            . $this->opciones['permisox'] . '-borrarxx|'
            . $this->opciones['permisox'] . '-activarx'];
        return  $permisos;
    }
    /**
     * inicializar las opciones con las que se arman las vistas
     *
     * @return $opciones
     */
    public function getOpciones()
    {
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituhead'] = 'IMPACTO-NIVELES';
        $this->opciones['slotxxxx'] = $this->opciones['permisox'];
        $this->opciones['perfilxx'] = 'sinperfi';
        $this->opciones['rutacarp'] = 'Backend.Administ.Modimpac.';
        $this->opciones['parametr'] = [];
        $this->opciones['routingx'] = [];
        $this->opciones['carpetax'] = ucfirst($this->opciones['permisox']);;
        $this->opciones['pestanix'] =$this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Pestanias.pestanias';
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Botones.botonesx';
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.formulario.formulario';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Crud.index';
        $this->opciones['tituloxx'] = "IMPACTO-NIVELES";
        $this->opciones['modalsxx'] = [];
        $this->opciones['tabsxxxx'] = 'tabsxxxx';
    }
}
