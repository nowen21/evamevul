<?php

use App\Models\Backend\Impactox\Impacto;
use Illuminate\Database\Seeder;

class ImpactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Impacto::create([
            'impacto'=>'REPUTACION',
        ]); // 1

        Impacto::create([
            'impacto'=>'PRODUCTIVIDAD',
        ]); // 2
        Impacto::create([
            'impacto'=>'FINANICIERA',
        ]); // 3

        Impacto::create([
            'impacto'=>'LEGAL',
        ]); // 4
    }
}
