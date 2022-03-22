<?php

use App\Models\Backend\Impactox\Nivel;
use Illuminate\Database\Seeder;

class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nivel::create([
            'nivel'=>'MUY BAJO',
            'minimoxx'=>0,
            'maximoxx'=>0.2,
        ]); // 1

        Nivel::create([
            'nivel'=>'BAJO',
            'minimoxx'=>0.2,
            'maximoxx'=>0.4,
        ]); // 2

        Nivel::create([
            'nivel'=>'MEDIO',
            'minimoxx'=>0.4,
            'maximoxx'=>0.6,
        ]); // 3

        Nivel::create([
            'nivel'=>'ALTO',
            'minimoxx'=>0.6,
            'maximoxx'=>0.8,
        ]); // 4

        Nivel::create([
            'nivel'=>'MUY ALTO',
            'minimoxx'=>0.8,
            'maximoxx'=>1.0,
        ]); // 5
        
    }
}
