<?php

namespace App\Traits\Backend\Administ;


trait BAdministPestaniasTrait
{
    /**
     * Estructura principal de las pestañas
     *
     * ['actaencu', // nombre del rout que va a tener la pestaña
     * '', // complemento le rout si lo tiene
     * [], // parametros del rout si los tiene
     * 'ACTA DE ENCUENTRO', // titulo de la pestana
     * true, // true indica que se carga de una y false que no
     * '', // agregarle la clase active
     * 'Actas de encuentro' // contenido que se muestra en el tooltip de la pestaña
     * ],
     */
    public $pestania = [
        ['activoxx', '', [], 'ACTIVOS', true, '', 'Administración de los activos'], // por mínimo debe tener un controllaor
        ['accesoxx', '', [], 'ACCESOS', true, '', 'Administración de los accesos'],
        ['actorxxx', '', [], 'ACTORES', true, '', 'Administración de los actores'],
        ['motivoxx', '', [], 'MOTIVOS', true, '', 'administracion de los motivos'],
        ['resultad', '', [], 'RESULTADOS', true, '', 'Administracion de los resultados'],

        ['actiacce', '', [], 'ACTIVO-ACCESOS', false, '', 'Administración de los accesos del activo'],
        ['acceacto', '', [], 'ACCESO-ACTORES', false, '', 'Administración de los actores del acceso'],
        ['actomoti', '', [], 'ACTOR-MOTIVOS', false, '', 'Administración de los motivos del actor'],
        ['motiresu', '', [], 'MOTIVO-RESULTADO', false, '', 'Administración de los resultados del motivo'],
        ['resuimpa', '', [], 'RESULTADO-IMPACTO', false, '', 'Administración de los impactos del resultado'],
        ['resuprob', '', [], 'RESULTADO-PROBABILIDADES', false, '', 'Administración de los impactos del resultado'],
    ];
    /**
     * permisos que va a manejar cada pestaña
     *
     * @param array $dataxxxx
     * @return $respuest
     */
    private function getCanany($dataxxxx)
    {
        $permisox = [
            'leerxxxx', 'crearxxx', 'editarxx', 'borrarxx', 'activarx'
        ];
        $respuest = [];
        foreach ($permisox as $key => $value) {
            $respuest[] = $dataxxxx[0] . '-' . $value;
        }
        return $respuest;
    }

    /**
     * armar la estructura principal de una pestaña
     *
     * @param array $dataxxxx
     * @return $respuest
     */
    public function getArmarPestania($dataxxxx)
    {
        $respuest = [
            'muespest' => false, // indica si se mustra o no
            'pestania' => [
                'routexxx' => route($dataxxxx[0] . $dataxxxx[1], $dataxxxx[2]), // ruta que tiene la pestaña
                'activexx' => $dataxxxx[5], // clase que activa la pestaña cuando se esté en ella
                'tituloxx' => $dataxxxx[3], // titulo con el que se identifica la pestanña
                'tooltipx' => $dataxxxx[6], // Ayuda para la pestaña
                'cananyxx' => $this->getCanany($dataxxxx),
            ]
        ];
        return $respuest;
    }

    public function getPestActive()
    {
        foreach ($this->pestania as $key => $value) {
            if ($value[0]==$this->opciones['permisox']) {
                $this->pestania[$key][5]='active';
            }
        }
    }
    /**
     * armar las pestañas que va a tener el módulo
     *
     * @param array $dataxxxx
     * @return $respuest
     */
    public function getArmarPestanias($dataxxxx)
    {
        $respuest = [];
       
        $this->getPestActive(); 
        foreach ($this->pestania as $key => $valuexxx) {
            if ($valuexxx[4]) {
                $respuest[] = $this->getArmarPestania($valuexxx);
            }
        }
        return $respuest;
    }
    public function getPestanias($dataxxxx)
    {
        $this->opciones['pestania']  = $this->getArmarPestanias($dataxxxx);
    }
}
