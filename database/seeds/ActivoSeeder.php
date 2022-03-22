<?php

use App\Models\Activo;
use Illuminate\Database\Seeder;

class ActivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Activo::create([
            'activo'=>'CONSIGNACIÓN',
        ]);

        Activo::create([
            'activo'=>'DOCUMENTACIÓN DEL ASPIRANTE',
        ]);

        Activo::create([
            'activo'=>'PLATAFORMA DE REGISTRO ESING.EDU',
        ]);
        Activo::create([
            'activo'=>'RECIBO DE PAGO',
        ]);

        Activo::create([
            'activo'=>'PLATAFORMA DE DE CARGUE DE MATERIAS AVAFP',
        ]);
    }
}
