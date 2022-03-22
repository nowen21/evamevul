<?php

use App\Models\Resultad;
use Illuminate\Database\Seeder;

class ResultadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Resultad::create([
            'resultad'=>'DIVULGACION',
        ]); // 1

        Resultad::create([
            'resultad'=>'ALTERACION',
        ]); // 2
        Resultad::create([
            'resultad'=>'DESTRUCCION O PERDIDA',
        ]); // 3

        Resultad::create([
            'resultad'=>'INTERRUPCION DEL ACCESO',
        ]); // 4

        // Resultad::create([
        //     'resultad'=>'',
        // ]); // 5
    }
}
