<?php

use App\Models\Backend\Administ\Metodoxx\Metodo;
use Illuminate\Database\Seeder;

class MetodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Metodo::create([
            'metodo'=>'ACEPTAR',
            'nivel_id'=>1
        ]);
        Metodo::create([
            'metodo'=>'ACEPTAR',
            'nivel_id'=>2
        ]);

        Metodo::create([
            'metodo'=>'TRANSFERIR',
            'nivel_id'=>3
        ]);

        Metodo::create([
            'metodo'=>'MITIGAR',
            'nivel_id'=>4
        ]);
        Metodo::create([
            'metodo'=>'MITIGAR',
            'nivel_id'=>5
        ]);
    }
}
