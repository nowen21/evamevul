<?php

namespace App\Traits\Backend\Administ;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait BAdministDataTablesTrait
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

    public function getBActivo($dataxxxx)
    {
        $dataxxxx = $this->getDefecto($dataxxxx);
        $this->opciones['tablasxx'][] = [
            'titunuev' => 'NUEVO ACTIVO',
            'titulist' => 'ACTIVOS',
            'archdttb' => 'Acomponentes.Adatatable.index',
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
                    ['td' => 'ACCIONES', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'ID', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'ACTIVO', 'widthxxx' => 80, 'rowspanx' => 1, 'colspanx' => 1],

                ]
            ],
            'columnsx' => [
                ['data' => 'botonexx', 'name' => 'botonexx'],
                ['data' => 'id', 'name' => 'activos.id'],
                ['data' => 'activo', 'name' => 'activo'],
            ],
            'tablaxxx' => 'dttactivos',
            'permisox' => $this->opciones['permisox'],
            'permnuev' => 'crearxxx',
            'parametr' => $dataxxxx['paranuev'],

        ];

        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'];
    }

    public function getBAcceso($dataxxxx)
    {
        $dataxxxx = $this->getDefecto($dataxxxx);
        $this->opciones['tablasxx'][] = [
            'titunuev' => 'NUEVO ACCESO',
            'titulist' => 'ACCESOS',
            'archdttb' => 'Acomponentes.Adatatable.index',
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
                    ['td' => 'ACCIONES', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'ID', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'ACCESO', 'widthxxx' => 80, 'rowspanx' => 1, 'colspanx' => 1],

                ]
            ],
            'columnsx' => [
                ['data' => 'botonexx', 'name' => 'botonexx'],
                ['data' => 'id', 'name' => 'accesos.id'],
                ['data' => 'acceso', 'name' => 'acceso'],
            ],
            'tablaxxx' => 'dttactivos',
            'permisox' => $this->opciones['permisox'],
            'permnuev' => 'crearxxx',
            'parametr' => $dataxxxx['paranuev'],

        ];

        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'];
    }

    public function getBActor($dataxxxx)
    {
        $dataxxxx = $this->getDefecto($dataxxxx);
        $this->opciones['tablasxx'][] = [
            'titunuev' => 'NUEVO ACTOR',
            'titulist' => 'ACTORES',
            'archdttb' => 'Acomponentes.Adatatable.index',
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
                    ['td' => 'ACCIONES', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'ID', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'ACTOR', 'widthxxx' => 80, 'rowspanx' => 1, 'colspanx' => 1],

                ]
            ],
            'columnsx' => [
                ['data' => 'botonexx', 'name' => 'botonexx'],
                ['data' => 'id', 'name' => 'actors.id'],
                ['data' => 'actor', 'name' => 'actor'],
            ],
            'tablaxxx' => 'dttactivos',
            'permisox' => $this->opciones['permisox'],
            'permnuev' => 'crearxxx',
            'parametr' => $dataxxxx['paranuev'],

        ];

        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'];
    }

    public function getBMotivo($dataxxxx)
    {
        $dataxxxx = $this->getDefecto($dataxxxx);
        $this->opciones['tablasxx'][] = [
            'titunuev' => 'NUEVO MOTIVO',
            'titulist' => 'MOTIVOS',
            'archdttb' => 'Acomponentes.Adatatable.index',
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
                    ['td' => 'ACCIONES', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'ID', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'MOTIVO', 'widthxxx' => 80, 'rowspanx' => 1, 'colspanx' => 1],

                ]
            ],
            'columnsx' => [
                ['data' => 'botonexx', 'name' => 'botonexx'],
                ['data' => 'id', 'name' => 'motivos.id'],
                ['data' => 'motivo', 'name' => 'motivo'],
            ],
            'tablaxxx' => 'dttactivos',
            'permisox' => $this->opciones['permisox'],
            'permnuev' => 'crearxxx',
            'parametr' => $dataxxxx['paranuev'],

        ];

        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'];
    }

    public function getBResultad($dataxxxx)
    {
        $dataxxxx = $this->getDefecto($dataxxxx);
        $this->opciones['tablasxx'][] = [
            'titunuev' => 'NUEVO RESULTADO',
            'titulist' => 'RESULTADOS',
            'archdttb' => 'Acomponentes.Adatatable.index',
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
                    ['td' => 'ACCIONES', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'ID', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'RESULTADO', 'widthxxx' => 80, 'rowspanx' => 1, 'colspanx' => 1],

                ]
            ],
            'columnsx' => [
                ['data' => 'botonexx', 'name' => 'botonexx'],
                ['data' => 'id', 'name' => 'resultads.id'],
                ['data' => 'resultad', 'name' => 'resultad'],
            ],
            'tablaxxx' => 'dttactivos',
            'permisox' => $this->opciones['permisox'],
            'permnuev' => 'crearxxx',
            'parametr' => $dataxxxx['paranuev'],

        ];

        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'];
    }


    public function getBActiacce($dataxxxx)
    {
        $dataxxxx = $this->getDefecto($dataxxxx);
        $this->opciones['tablasxx'][] = [
            'titunuev' => 'NUEVO ACCESO',
            'titulist' => 'ACCESOS',
            'archdttb' => 'Acomponentes.Adatatable.index',
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
                    ['td' => 'ACCIONES', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'ID', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'ACCESO', 'widthxxx' => 80, 'rowspanx' => 1, 'colspanx' => 1],

                ]
            ],
            'columnsx' => [
                ['data' => 'botonexx', 'name' => 'botonexx'],
                ['data' => 'id', 'name' => 'actiacces.id'],
                ['data' => 'acceso', 'name' => 'acceso'],
            ],
            'tablaxxx' => 'dttactivos',
            'permisox' => $this->opciones['permisox'],
            'permnuev' => 'crearxxx',
            'parametr' => $dataxxxx['paranuev'],

        ];

        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'];
    }

    public function getBAcceacto($dataxxxx)
    {
        $dataxxxx = $this->getDefecto($dataxxxx);
        $this->opciones['tablasxx'][] = [
            'titunuev' => 'NUEVO ACTOR',
            'titulist' => 'ACTORES',
            'archdttb' => 'Acomponentes.Adatatable.index',
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
                    ['td' => 'ACCIONES', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'ID', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'ACTOR', 'widthxxx' => 80, 'rowspanx' => 1, 'colspanx' => 1],

                ]
            ],
            'columnsx' => [
                ['data' => 'botonexx', 'name' => 'botonexx'],
                ['data' => 'id', 'name' => 'acceactos.id'],
                ['data' => 'actor', 'name' => 'actor'],
            ],
            'tablaxxx' => 'dttactivos',
            'permisox' => $this->opciones['permisox'],
            'permnuev' => 'crearxxx',
            'parametr' => $dataxxxx['paranuev'],

        ];

        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'];
    }

    public function getBActomoti($dataxxxx)
    {
        $dataxxxx = $this->getDefecto($dataxxxx);
        $this->opciones['tablasxx'][] = [
            'titunuev' => 'NUEVO MOTIVO',
            'titulist' => 'MOTIVOS',
            'archdttb' => 'Acomponentes.Adatatable.index',
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
                    ['td' => 'ACCIONES', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'ID', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'MOTIVO', 'widthxxx' => 80, 'rowspanx' => 1, 'colspanx' => 1],

                ]
            ],
            'columnsx' => [
                ['data' => 'botonexx', 'name' => 'botonexx'],
                ['data' => 'id', 'name' => 'actomotis.id'],
                ['data' => 'motivo', 'name' => 'motivo'],
            ],
            'tablaxxx' => 'dttactivos',
            'permisox' => $this->opciones['permisox'],
            'permnuev' => 'crearxxx',
            'parametr' => $dataxxxx['paranuev'],

        ];

        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'];
    }



    public function getBMotiresu($dataxxxx)
    {
        $dataxxxx = $this->getDefecto($dataxxxx);
        $this->opciones['tablasxx'][] = [
            'titunuev' => 'NUEVO RESULTADO',
            'titulist' => 'RESULTADOS',
            'archdttb' => 'Acomponentes.Adatatable.index',
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
                    ['td' => 'ACCIONES', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'ID', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'RESULTADO', 'widthxxx' => 80, 'rowspanx' => 1, 'colspanx' => 1],

                ]
            ],
            'columnsx' => [
                ['data' => 'botonexx', 'name' => 'botonexx'],
                ['data' => 'id', 'name' => 'actomotis.id'],
                ['data' => 'resultad', 'name' => 'resultad'],
            ],
            'tablaxxx' => 'dttactivos',
            'permisox' => $this->opciones['permisox'],
            'permnuev' => 'crearxxx',
            'parametr' => $dataxxxx['paranuev'],

        ];

        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'];
    }

    public function getBResuimpa($dataxxxx)
    {
        $dataxxxx = $this->getDefecto($dataxxxx);
        $this->opciones['tablasxx'][] = [
            'titunuev' => 'NUEVO IMPACTO',
            'titulist' => 'IMPACTOS',
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
            'cabecera' => [
                [
                    ['td' => 'ACCIONES', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'ID', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'IMPACTO', 'widthxxx' => 60, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'NIVEL', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'VALOR', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                ]
            ],
            'columnsx' => [
                ['data' => 'botonexx', 'name' => 'botonexx'],
                ['data' => 'id', 'name' => 'resuimpas.id'],
                ['data' => 'impacto', 'name' => 'impacto'],
                ['data' => 'nivel', 'name' => 'nivel'],
                ['data' => 'impanive', 'name' => 'impanive'],
            ],
            'tablaxxx' => 'dttactivos',
            'permisox' => $this->opciones['permisox'],
            'permnuev' => 'crearxxx',
            'parametr' => $dataxxxx['paranuev'],

        ];

        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'];
    }

    
    public function getBResuprob($dataxxxx)
    {
        $dataxxxx = $this->getDefecto($dataxxxx);
        $this->opciones['tablasxx'][] = [
            'titunuev' => 'NUEVA PROBABILIDAD',
            'titulist' => 'PROBABILIDADES',
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
            'cabecera' => [
                [
                    ['td' => 'ACCIONES', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'ID', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'PROBABILIDAD', 'widthxxx' => 60, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'NIVEL', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'VALOR', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                ]
            ],
            'columnsx' => [
                ['data' => 'botonexx', 'name' => 'botonexx'],
                ['data' => 'id', 'name' => 'resuprobs.id'],
                ['data' => 'tipoprob', 'name' => 'tipoprobs.tipoprob'],
                ['data' => 'nivel', 'name' => 'nivels.nivel'],
                ['data' => 'probabil', 'name' => 'probabils.probabil'],
            ],
            'tablaxxx' => 'dttactivos',
            'permisox' => $this->opciones['permisox'],
            'permnuev' => 'crearxxx',
            'parametr' => $dataxxxx['paranuev'],

        ];

        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'];
    }
}
