<?php

namespace App\Traits\Backend\Administ\Motivoxx;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait BMotivoxxParametrizarTrait
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
        $this->opciones['tituhead'] = 'MOTIVOS';
        $this->opciones['slotxxxx'] = $this->opciones['permisox'];
        $this->opciones['perfilxx'] = 'sinperfi';
        $this->opciones['rutacarp'] = 'Backend.Administ.';
        $this->opciones['parametr'] = [];
        $this->opciones['routingx'] = [];
        $this->opciones['carpetax'] = ucfirst($this->opciones['permisox']); ;
        $this->opciones['rutacomp'] = 'Acomponentes.';
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacomp'].'.Botones.botonesx';
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.formulario.formulario';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacomp'].'.Acrud.index';
        $this->opciones['tituloxx'] = "MOTIVOS";  
        $this->opciones['modalsxx'] = [];  
        $this->opciones['tabsxxxx'] = 'tabsxxxx';    
    }

}
