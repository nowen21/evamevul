<?php

namespace App\Traits\Backend\Administ\Probabil;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait BProbabilDataTablesTrait
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


    public function getBTconsecu($dataxxxx)
    {
        $tablaxxx = $this->getBTabla($dataxxxx);
        $tablaxxx['titulist']= $tablaxxx['titulist'].' TIPO CONSECUENCIAS';

        $tablaxxx['cabecera'] = [
            [
                ['td' => 'ACCIONES', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ID', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'TIPO CONECUENCIA', 'widthxxx' => 80, 'rowspanx' => 1, 'colspanx' => 1],

            ]
        ];
        $tablaxxx['columnsx'] = [
            ['data' => 'botonexx', 'name' => 'botonexx'],
            ['data' => 'id', 'name' => 'tconsecus.id'],
            ['data' => 'tconsecu', 'name' => 'tconsecu'],
        ];


        $this->opciones['tablasxx'][] = $tablaxxx;
    }

    public function getBConsecue($dataxxxx)
    {
        $tablaxxx = $this->getBTabla($dataxxxx);
        $tablaxxx['titulist']= $tablaxxx['titulist'].' TIPO CONSECUENCIAS';
        $tablaxxx['cabecera'] = [
            [
                ['td' => 'ACCIONES', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ID', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'CONECUENCIA', 'widthxxx' => 40, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'TIPO CONECUENCIA', 'widthxxx' => 40, 'rowspanx' => 1, 'colspanx' => 1],

            ]
        ];
        $tablaxxx['columnsx'] = [
            ['data' => 'botonexx', 'name' => 'botonexx'],
            ['data' => 'id', 'name' => 'consecues.id'],
            ['data' => 'consecue', 'name' => 'consecue'],
            ['data' => 'tconsecu', 'name' => 'tconsecu'],
        ];
        $this->opciones['tablasxx'][] = $tablaxxx;
    }

    public function getBTipoprob($dataxxxx)
    {
        $tablaxxx = $this->getBTabla($dataxxxx);
        $tablaxxx['titulist']= $tablaxxx['titulist'].' TIPO PROBABILIDAD';

        $tablaxxx['cabecera'] = [
            [
                ['td' => 'ACCIONES', 'widthxxx' => 15, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ID', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'TIPO PROBABILIDAD', 'widthxxx' => 75, 'rowspanx' => 1, 'colspanx' => 1],

            ]
        ];
        $tablaxxx['columnsx'] = [
            ['data' => 'botonexx', 'name' => 'botonexx'],
            ['data' => 'id', 'name' => 'tipoprobs.id'],
            ['data' => 'tipoprob', 'name' => 'tipoprob'],
        ];


        $this->opciones['tablasxx'][] = $tablaxxx;
    }

    public function getBProbabil($dataxxxx)
    {
        $tablaxxx = $this->getBTabla($dataxxxx);
        $tablaxxx['titulist']= $tablaxxx['titulist'].' TIPO PROBABILIDAD';
        $tablaxxx['cabecera'] = [
            [
                ['td' => 'ACCIONES', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ID', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'NIVEL', 'widthxxx' => 40, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'TIPO PROBABILIDAD', 'widthxxx' => 40, 'rowspanx' => 1, 'colspanx' => 1],

            ]
        ];
        $tablaxxx['columnsx'] = [
            ['data' => 'botonexx', 'name' => 'botonexx'],
            ['data' => 'id', 'name' => 'probabils.id'],
            ['data' => 'nivel', 'name' => 'nivel'],
            ['data' => 'tipoprob', 'name' => 'tipoprob'],
        ];
        $this->opciones['tablasxx'][] = $tablaxxx;
    }

    public function getBConsprob($dataxxxx)
    {
        $tablaxxx = $this->getBTabla($dataxxxx);
        $tablaxxx['titulist']= $tablaxxx['titulist'].' CONSECUENCIA-PROBABILIDAD';
        $tablaxxx['cabecera'] = [
            [
                ['td' => 'ACCIONES', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ID', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],  
                ['td' => 'TIPO CONSECUENCIA', 'widthxxx' => 20, 'rowspanx' => 1, 'colspanx' => 1],             
                ['td' => 'CONSECUENCIA', 'widthxxx' => 20, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'PROBABILIDAD', 'widthxxx' => 30, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'NIVEL', 'widthxxx' => 20, 'rowspanx' => 1, 'colspanx' => 1],
            ]
        ];
        $tablaxxx['columnsx'] = [
            ['data' => 'botonexx', 'name' => 'botonexx'],
            ['data' => 'id', 'name' => 'consprobs.id'],
            ['data' => 'tconsecu', 'name' => 'tconsecu'],
            ['data' => 'consecue', 'name' => 'consecue'],
            ['data' => 'tipoprob', 'name' => 'tipoprob'],
            ['data' => 'nivel', 'name' => 'nivel'],
        ];
        $this->opciones['tablasxx'][] = $tablaxxx;
    }
}
