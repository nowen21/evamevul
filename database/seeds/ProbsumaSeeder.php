<?php

use App\Models\Backend\Administ\Probabil\Probsuma;
use App\Models\Backend\Impactox\Nivel;
use App\Models\Motiresu;
use Illuminate\Database\Seeder;

class ProbsumaSeeder extends Seeder
{
    public function getNivel($sumaxxxx)
    {
        $nivelxxx = Nivel::where(
            function ($queryxxx) use ($sumaxxxx) {
                $minimoxx = 0.0;
                if ($sumaxxxx > 0.2) {
                    $numeroxx = explode('.', $sumaxxxx);
                    if (count($numeroxx) == 2) {
                        $numeroxx = substr($numeroxx[1], 0, 1);
                        if ($numeroxx % 2 == 0) {
                            $minimoxx = '0.' .  $numeroxx;
                        } else {
                            $minimoxx = '0.' .  ($numeroxx - 1);
                        }
                    }else if ($sumaxxxx==1) {
                        $minimoxx=$sumaxxxx-0.2;
                    } 
                    $queryxxx->where('minimoxx', $minimoxx);
                }
                $queryxxx->where('maximoxx',   $minimoxx + 0.2);
            }
        )->first()->id;
        return $nivelxxx;
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $motiresu = Motiresu::get(['id']);

        foreach ($motiresu as $key => $motiresx) {
            $sumaxxxx=0;
            foreach ($motiresx->resuimpas as $key => $value) {
                $sumaxxxx+=$value->impanive->impanive;
                $impasuma = Probsuma::where('motiresu_id', $motiresx->id)->first();
                $dataxxxx = [
                    'motiresu_id' => $motiresx->id,
                    'nivel_id' => $this->getNivel($sumaxxxx),
                    'totaprob' => $sumaxxxx
                ];
                if (is_null($impasuma)) {
                    Probsuma::create($dataxxxx);
                }else{
                    $impasuma->update($dataxxxx);
                }
            }
        }
    }
}
