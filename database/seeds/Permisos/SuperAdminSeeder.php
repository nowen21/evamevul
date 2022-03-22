<?php

namespace databese\seeds\Permisos;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** Módulo retenciones */
        $permisox = 'welcmodu';
        Permission::create([
            'name' => $permisox . '-moduloxx',
        ]);


        //permisos para el crud de welcomex
        $permisox = 'welcomex';
        Permission::create([
            'name' => $permisox . '-leerxxxx',   
        ]);

        Permission::create([
            'name' => $permisox . '-crearxxx',
        ]);

        Permission::create([
            'name' => $permisox . '-editarxx',
        ]);

        Permission::create([
            'name' => $permisox . '-borrarxx',
        ]);

        Permission::create([
            'name' => $permisox . '-activarx',
        ]);

        
        
    }
}
