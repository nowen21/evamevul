<?php

use App\Models\Backend\Administ\Probabil\Tconsecu;
use Illuminate\Database\Seeder;

class TconsecuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tconsecu::create([
            'tconsecu'=>'PERSONAS',
        ]);

        Tconsecu::create([
            'tconsecu'=>'ECINOMICA',
        ]);

        Tconsecu::create([
            'tconsecu'=>'AMBIENTAL',
        ]);

        Tconsecu::create([
            'tconsecu'=>'CLIENTES',
        ]);

        Tconsecu::create([
            'tconsecu'=>'IMAGEN DE LA EMPRESA',
        ]);
    }
}
