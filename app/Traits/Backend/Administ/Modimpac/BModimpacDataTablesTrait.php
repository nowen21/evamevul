<?php

namespace App\Traits\Backend\Administ\Modimpac;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait BModimpacDataTablesTrait
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

    public function getBTabla($dataxxxx)
    {
        $dataxxxx = $this->getDefecto($dataxxxx);
        $tablaxxx = [
            'titunuev' => 'NUEVO',
            'titulist' => 'LISTA',
            'archdttb' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Datatable.indexxxx',
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
            'tablaxxx' => 'datatable',
            'permisox' => $this->opciones['permisox'],
            'permnuev' => 'crearxxx',
            'parametr' => $dataxxxx['paranuev'], 

        ];

        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'];
            return $tablaxxx;
    }


    public function getTablaImpactox($dataxxxx)
    {
        $tablaxxx = $this->getBTabla($dataxxxx);
        $tablaxxx['titulist']= $tablaxxx['titulist'].' '.$this->opciones['tituloxx'];

        $tablaxxx['cabecera'] = [
            [
                ['td' => 'ACCIONES', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ID', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'IMPACTO', 'widthxxx' => 80, 'rowspanx' => 1, 'colspanx' => 1],

            ]
        ];
        $tablaxxx['columnsx'] = [
            ['data' => 'botonexx', 'name' => 'botonexx'],
            ['data' => 'id', 'name' => 'impactos.id'],
            ['data' => 'impacto', 'name' => 'impacto'],
        ];


        $this->opciones['tablasxx'][] = $tablaxxx;
    }

    public function getTablaImpanive($dataxxxx)
    {
        $tablaxxx = $this->getBTabla($dataxxxx);
        $tablaxxx['titulist']= $tablaxxx['titulist'].' '.$this->opciones['tituloxx'];

        $tablaxxx['cabecera'] = [
            [
                ['td' => 'ACCIONES', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ID', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'NIVEL', 'widthxxx' => 20, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'VALOR', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'IMPACTO', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],

            ]
        ];
        $tablaxxx['columnsx'] = [
            ['data' => 'botonexx', 'name' => 'botonexx'],
            ['data' => 'id', 'name' => 'impanives.id'],
            ['data' => 'nivel', 'name' => 'nivels.nivel'],
            ['data' => 'impanive', 'name' => 'impanives.impanive'],
            ['data' => 'impacto', 'name' => 'impactos.impacto'],
        ];


        $this->opciones['tablasxx'][] = $tablaxxx;
    }
   
}
