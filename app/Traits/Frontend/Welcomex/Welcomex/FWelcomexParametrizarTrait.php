<?php

namespace App\Traits\Frontend\Welcomex\Welcomex;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait FWelcomexParametrizarTrait
{

    private $opciones=[
        'modeloxx'=>null,
        'botoform'=>[],
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
        $this->opciones['tituhead'] = 'ACTIVOS';
        $this->opciones['slotxxxx'] = $this->opciones['permisox'];
        $this->opciones['perfilxx'] = 'sinperfi';
        $this->opciones['rutacarp'] = 'Frontend.Welcomex.';
        $this->opciones['parametr'] = [];
        $this->opciones['routingx'] = [];
        $this->opciones['carpetax'] = ucfirst($this->opciones['permisox']); ;
        $this->opciones['rutacomp'] = 'Acomponentes.';
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacomp'].'.Botones.botonesx';
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.formulario.formulario';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'].$this->opciones['carpetax'].'.Crud.sinforea';
        $this->opciones['tituloxx'] = "ACTIVOS";  
        $this->opciones['modalsxx'] = [];  
        $this->opciones['tabsxxxx'] = 'welcomex';    
    }

}
