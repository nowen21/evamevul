<?php

use App\Models\Backend\Administ\Probabil\Tipoprob;
use Illuminate\Database\Seeder;

class TipoprobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipoprob::create([
            'tipoprob'=>'NO HA CORRIDO EN LA INDUSTRIA',
        ]); // 1
        Tipoprob::create([
            'tipoprob'=>'HA OCURRIDO EN LA INDUSTRIA',
        ]); // 2
        Tipoprob::create([
            'tipoprob'=>'HA OCURRIDO EN LA EMPRESA',
        ]); // 3
        Tipoprob::create([
            'tipoprob'=>'SUCEDE VARIAS VECES AL AÑO EN EL EMPRESA',
        ]); // 4

        Tipoprob::create([
            'tipoprob'=>'SUCEDE VARIAS VECES AL AÑO EN EL AREA',
        ]); // 5
    }
}
