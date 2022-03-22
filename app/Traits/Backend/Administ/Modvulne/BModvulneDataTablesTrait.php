<?php

namespace App\Traits\Backend\Administ\Modvulne;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait BModvulneDataTablesTrait
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


    public function getBVulnacti($dataxxxx)
    {
        $tablaxxx = $this->getBTabla($dataxxxx);
        $tablaxxx['titulist']= $tablaxxx['titulist'].' ACTIVOS';

        $tablaxxx['cabecera'] = [
            [
                ['td' => 'ACCIONES', 'widthxxx' => 20, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ID', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ACTIVO', 'widthxxx' => 70, 'rowspanx' => 1, 'colspanx' => 1],

            ]
        ];
        $tablaxxx['columnsx'] = [
            ['data' => 'botonexx', 'name' => 'botonexx'],
            ['data' => 'id', 'name' => 'activos.id'],
            ['data' => 'activo', 'name' => 'activos.activo'],
        ];


        $this->opciones['tablasxx'][] = $tablaxxx;
    }

    public function getBHerramie($dataxxxx)
    {
        $tablaxxx = $this->getBTabla($dataxxxx);
        $tablaxxx['titulist']= $tablaxxx['titulist'].' HERRAMIENTAS';

        $tablaxxx['cabecera'] = [
            [
                ['td' => 'ACCIONES', 'widthxxx' => 20, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ID', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'HERRAMIENTA', 'widthxxx' => 70, 'rowspanx' => 1, 'colspanx' => 1],

            ]
        ];
        $tablaxxx['columnsx'] = [
            ['data' => 'botonexx', 'name' => 'botonexx'],
            ['data' => 'id', 'name' => 'herramies.id'],
            ['data' => 'herramie', 'name' => 'herramies.herramie'],
        ];


        $this->opciones['tablasxx'][] = $tablaxxx;
    }

    public function getBVulnerab($dataxxxx)
    {
        $tablaxxx = $this->getBTabla($dataxxxx);
        $tablaxxx['titulist']= $tablaxxx['titulist'].' VULNERABILIDADES';

        $tablaxxx['cabecera'] = [
            [
                ['td' => 'ACCIONES', 'widthxxx' => 20, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ID', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'VULNERABILIDAD', 'widthxxx' => 70, 'rowspanx' => 1, 'colspanx' => 1],

            ]
        ];
        $tablaxxx['columnsx'] = [
            ['data' => 'botonexx', 'name' => 'botonexx'],
            ['data' => 'id', 'name' => 'vulnerabs.id'],
            ['data' => 'vulnerab', 'name' => 'vulnerab'],
        ];


        $this->opciones['tablasxx'][] = $tablaxxx;
    }

    public function getBVulnacto($dataxxxx)
    {
        $tablaxxx = $this->getBTabla($dataxxxx);
        $tablaxxx['titulist']= $tablaxxx['titulist'].' VULNERABILIDADES';
        $tablaxxx['cabecera'] = [
            [
                ['td' => 'ACCIONES', 'widthxxx' => 20, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ID', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ACTOR', 'widthxxx' => 35, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'VULNERABILIDAD', 'widthxxx' => 35, 'rowspanx' => 1, 'colspanx' => 1],

            ]
        ];
        $tablaxxx['columnsx'] = [
            ['data' => 'botonexx', 'name' => 'botonexx'],
            ['data' => 'id', 'name' => 'vulnactos.id'],
            ['data' => 'actor', 'name' => 'actors.actor'],
            ['data' => 'vulnerab', 'name' => 'vulnerabs.vulnerab'],
        ];
        $this->opciones['tablasxx'][] = $tablaxxx;
    }

    public function getBActoherr($dataxxxx)
    {
        $tablaxxx = $this->getBTabla($dataxxxx);
        $tablaxxx['titulist']= $tablaxxx['titulist'].' VULNERABILIDADES';
        $tablaxxx['cabecera'] = [
            [
                ['td' => 'ACCIONES', 'widthxxx' => 20, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ID', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ACTOR', 'widthxxx' => 20, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'HERRAMIENTA', 'widthxxx' => 25, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'VULNERABILIDAD', 'widthxxx' => 25, 'rowspanx' => 1, 'colspanx' => 1],

            ]
        ];
        $tablaxxx['columnsx'] = [
            ['data' => 'botonexx', 'name' => 'botonexx'],
            ['data' => 'id', 'name' => 'actoherrs.id'],
            ['data' => 'actor', 'name' => 'actors.actor'],
            ['data' => 'herramie', 'name' => 'herramies.herramie'],
            ['data' => 'vulnerab', 'name' => 'vulnerabs.vulnerab'],
        ];
        $this->opciones['tablasxx'][] = $tablaxxx;
    }

}
