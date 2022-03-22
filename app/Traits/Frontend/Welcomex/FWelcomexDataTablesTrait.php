<?php

namespace App\Traits\Frontend\Welcomex;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait FWelcomexDataTablesTrait
{
    /**
     * grabar o actualizar registros para paises
     *
     * @param array $dataxxxx
     * @return $usuariox
     */

    public function getTablasModulo($dataxxxx)
    {
        $dataxxxx['tablasxx'] = [];
        $dataxxxx['ruarchjs'] = [
            ['jsxxxxxx' => $dataxxxx['rutacarp'] . $dataxxxx['carpetax'] . '.Js.tabla']
        ];
        return $dataxxxx;
    }

    public function getDefecto($dataxxxx)
    {
        if (!isset($dataxxxx['vercrear'])) {
            $dataxxxx['vercrear'] = true;
        }
        if (!isset($dataxxxx['botonapi'])) {
            $dataxxxx['botonapi'] = 'botonesapi';
        }
        if (!isset($dataxxxx['parametr'])) {
            $dataxxxx['parametr'] = [];
        }

        if (!isset($dataxxxx['paranuev'])) {
            $dataxxxx['paranuev'] = [];
        }
        return $dataxxxx;
    }
    public function getTablaWelcomex($dataxxxx)
    {
        $dataxxxx['vercrear']=false;
        $dataxxxx = $this->getDefecto($dataxxxx);
        $this->opciones['tablasxx'][] = [
            'titunuev' => 'NUEVA RETENCION',
            'titulist' => 'ACTIVOS',
            'archdttb' => $this->opciones['rutacarp'].$this->opciones['carpetax'].'.Datatable.index',
            'vercrear' => $dataxxxx['vercrear'],
            'dataxxxx' => [
                ['campoxxx' => 'botonapi', 'dataxxxx' => $dataxxxx['botonapi']]
            ],
            'urlxxxxx' => route($this->opciones['permisox'] . '.listaxxx', $dataxxxx['parametr']),
            'permtabl' => [
                $this->opciones['permisox'] . '-leerxxxx',
                $this->opciones['permisox'] . '-crearxxx',
                $this->opciones['permisox'] . '-editarxx',
                $this->opciones['permisox'] . '-borrarxx',
                $this->opciones['permisox'] . '-activarx',
            ],
            'cabecera' => [
                [
                    ['td' => 'ID', 'widthxxx' => 5, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'RESULTADO', 'widthxxx' => 15, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'IMPACTO', 'widthxxx' => 20, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'PROBABILIDAD', 'widthxxx' => 15, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'RIESGO', 'widthxxx' => 15, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'METODO', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'PLAN', 'widthxxx' => 20, 'rowspanx' => 1, 'colspanx' => 1],
                ]
            ],
            'columnsx' => [
                ['data' => 'id', 'name' => 'motiresus.id'],
                ['data' => 'activo', 'name' => 'activo'],
                ['data' => 'acceso', 'name' => 'acceso'],
                ['data' => 'actor', 'name' => 'actor'],
                ['data' => 'motivo', 'name' => 'motivo'],
               
            ],
            'tablaxxx' => 'datatableddd',
            'permisox' => $this->opciones['permisox'],
            'permnuev' => 'crearxxx',
            'parametr' => $dataxxxx['paranuev'],

        ];

        $this->opciones['tablasxx'][] = [
            'vulnerab' =>[''=>'Seleccione'],
            'actorxxx' =>[''=>'Seleccione'],
            'herramie' =>[''=>'Seleccione'],
            'titunuev' => 'NUEVA RETENCION',
            'titulist' => 'VULNERABILIDADES',
            'archdttb' => $this->opciones['rutacarp'].$this->opciones['carpetax'].'.Datatable.index',
            'vercrear' =>false,
            'dataxxxx' => [
                ['campoxxx' => 'botonapi', 'dataxxxx' => $dataxxxx['botonapi']]
            ],
            'urlxxxxx' => route($this->opciones['permisox'] . '.listaxxx', $dataxxxx['parametr']),
            'permtabl' => [
                $this->opciones['permisox'] . '-leerxxxx',
                $this->opciones['permisox'] . '-crearxxx',
                $this->opciones['permisox'] . '-editarxx',
                $this->opciones['permisox'] . '-borrarxx',
                $this->opciones['permisox'] . '-activarx',
            ],
            'cabecera' => [
                [
                    ['td' => 'ID', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                    // ['td' => 'ACTIVO', 'widthxxx' => 25, 'rowspanx' => 1, 'colspanx' => 1],
                    // ['td' => 'VULNERABILIDAD', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
                    // ['td' => 'ACTOR', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'HERRAMIENTA', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
                ]
            ],
            'columnsx' => [
                ['data' => 'id', 'name' => 'motiresus.id'],
                ['data' => 'activo', 'name' => 'activo'],
                ['data' => 'acceso', 'name' => 'acceso'],
            ],
            'tablaxxx' => 'dttdebilidades',
            'permisox' => $this->opciones['permisox'],
            'permnuev' => 'crearxxx',
            'parametr' => $dataxxxx['paranuev'],

        ];

        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'];
    }

   
}
