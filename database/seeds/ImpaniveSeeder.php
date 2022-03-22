<?php

use App\Models\Backend\Impactox\Impacto;
use App\Models\Backend\Impactox\Impanive;
use Illuminate\Database\Seeder;

class ImpaniveSeeder extends Seeder
{
    public function impanive()
    {
        $numeroxx = rand(2, 4) / 10;

        return $numeroxx;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // foreach (Impacto::get(['id']) as $key => $impacto) {
        //     $nivelxxx = [2, 3, 4];
        //     foreach ($nivelxxx as $key => $value) {
        //         Impanive::create([
        //             'nivel_id' => $value,
        //             'impacto_id' => $impacto->id,
        //             'impanive' => ($value)*$this->impanive()/4,
        //         ]); 
        //     }
        // }

        Impanive::create([ 'nivel_id' => 2, 'impacto_id' => 1, 'impanive' => 0.05,]);
        Impanive::create([ 'nivel_id' => 3, 'impacto_id' => 1, 'impanive' => 0.15,]);
        Impanive::create([ 'nivel_id' => 4, 'impacto_id' => 1, 'impanive' => 0.4,]);
        Impanive::create([ 'nivel_id' => 2, 'impacto_id' => 2, 'impanive' => 0.05,]);
        Impanive::create([ 'nivel_id' => 3, 'impacto_id' => 2, 'impanive' => 0.225,]);
        Impanive::create([ 'nivel_id' => 4, 'impacto_id' => 2, 'impanive' => 0.4,]);
        Impanive::create([ 'nivel_id' => 2, 'impacto_id' => 3, 'impanive' => 0.1,]);
        Impanive::create([ 'nivel_id' => 3, 'impacto_id' => 3, 'impanive' => 0.15,]);
        Impanive::create([ 'nivel_id' => 4, 'impacto_id' => 3, 'impanive' => 0.4,]);
        Impanive::create([ 'nivel_id' => 2, 'impacto_id' => 4, 'impanive' => 0.05,]);
        Impanive::create([ 'nivel_id' => 3, 'impacto_id' => 4, 'impanive' => 0.15,]);
        Impanive::create([ 'nivel_id' => 4, 'impacto_id' => 4, 'impanive' => 0.3,]);
    }
}
