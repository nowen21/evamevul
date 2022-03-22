<?php

use App\Models\Acceso;
use Illuminate\Database\Seeder;

class AccesoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Acceso::create([
            'acceso'=>'HUMANOS CON ACCESO A LA RED',
        ]);

        Acceso::create([
            'acceso'=>'HUMANOS CON ACCESO FÍSICO',
        ]);

        Acceso::create([
            'acceso'=>'PROBLEMA CON LOS SITEMA',
        ]);

        Acceso::create([
            'acceso'=>'OTROS PROBLEMAS',
        ]);

        // Acceso::create([
        //     'acceso'=>'N/A',
        // ]);
    }
}
