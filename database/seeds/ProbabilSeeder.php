<?php

use App\Models\Backend\Administ\Probabil\Probabil;
use App\Models\Backend\Administ\Probabil\Tipoprob;
use Illuminate\Database\Seeder;

class ProbabilSeeder extends Seeder
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
        // $tipoprob = Tipoprob::get(['id']);
        // foreach ($tipoprob as $key => $tipoprox) {

        //     $nivelxxx = [2, 3, 4];
        //     foreach ($nivelxxx as $key => $value) {
        //         Probabil::create([
        //             'nivel_id' => $value,
        //             'tipoprob_id' => $tipoprox->id,
        //             'probabil'=>($value)*$this->impanive()/5
        //         ]);
        //     }
        // }

        Probabil::create(['nivel_id' => 2, 'tipoprob_id' => 1, 'probabil' => 0.1]);
        Probabil::create(['nivel_id' => 3, 'tipoprob_id' => 1, 'probabil' => 0.23]);
        Probabil::create(['nivel_id' => 4, 'tipoprob_id' => 1, 'probabil' => 0.4]);
        Probabil::create(['nivel_id' => 2, 'tipoprob_id' => 2, 'probabil' => 0.05]);
        Probabil::create(['nivel_id' => 3, 'tipoprob_id' => 2, 'probabil' => 0.23]);
        Probabil::create(['nivel_id' => 4, 'tipoprob_id' => 2, 'probabil' => 0.3]);
        Probabil::create(['nivel_id' => 2, 'tipoprob_id' => 3, 'probabil' => 0.1]);
        Probabil::create(['nivel_id' => 3, 'tipoprob_id' => 3, 'probabil' => 0.23]);
        Probabil::create(['nivel_id' => 4, 'tipoprob_id' => 3, 'probabil' => 0.4]);
        Probabil::create(['nivel_id' => 2, 'tipoprob_id' => 4, 'probabil' => 0.05]);
        Probabil::create(['nivel_id' => 3, 'tipoprob_id' => 4, 'probabil' => 0.15]);
        Probabil::create(['nivel_id' => 4, 'tipoprob_id' => 4, 'probabil' => 0.3]);
        Probabil::create(['nivel_id' => 2, 'tipoprob_id' => 5, 'probabil' => 0.05]);
        Probabil::create(['nivel_id' => 3, 'tipoprob_id' => 5, 'probabil' => 0.23]);
        Probabil::create(['nivel_id' => 4, 'tipoprob_id' => 5, 'probabil' => 0.3]);
    }
}
