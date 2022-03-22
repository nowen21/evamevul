<?php

namespace App\Traits;

use Spatie\Permission\Models\Permission;

trait GestionPermisosSeedTrait
{

    public function getPermiso($permisox, $tipoperm)
    {
        Permission::create([
            'name' => $permisox . '-' . $tipoperm,
        ]);
    }

    public function getLeerxxxx($permisox)
    {
        $tipoperm='leerxxxx';
        $this->getPermiso($permisox, $tipoperm);
    }
    public function getModulo($permisox)
    {
        $this->getPermiso($permisox, 'moduloxx');
    }
    /** Módulo retenciones */

    public function getPermisos($permisox)
    {
        $this->getLeerxxxx($permisox);
        $this->getPermiso($permisox, 'crearxxx');
        $this->getPermiso($permisox, 'editarxx');
        $this->getPermiso($permisox, 'borrarxx');
        $this->getPermiso($permisox, 'activarx');
    }
}
