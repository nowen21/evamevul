<?php

use App\Models\Backend\Administ\Modvulne\Herramie;
use Illuminate\Database\Seeder;

class HerramieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Herramie::create( [
            'herramie'=>'HERRAMIENTA',
        ]);

        Herramie::create( [
            'herramie'=>'CHECKLIST/SCRIPT',
        ]);
    }
}
