<?php

use App\Models\Backend\Administ\Metodoxx\Metodo;
use App\Models\Backend\Administ\Probabil\Probimpa;
use App\Models\Backend\Administ\Probabil\Probsuma;
use App\Models\Backend\Impactox\Impasuma;
use App\Models\Backend\Impactox\Nivel;
use App\Models\Motiresu;
use Illuminate\Database\Seeder;

class ProbimpaSeeder extends Seeder
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
        foreach ($motiresu as $key => $value) {
            $impasuma = Impasuma::where('motiresu_id', $value->id)->first();
            $probsuma = Probsuma::where('motiresu_id', $value->id)->first();
            $riesgoxx=($probsuma->totaprob + $impasuma->totaimpa)/2;
            $nivelxxx=$this->getNivel($riesgoxx);
            // echo $nivelxxx.'<br>';
            Probimpa::create([
                'nivel_id' =>$nivelxxx,
                'motiresu_id' => $value->id,
                'impasuma_id' => $impasuma->id,
                'probsuma_id' => $probsuma->id,
                'riesgoxx' => $riesgoxx,
                'metodo_id' => Metodo::where('nivel_id',$nivelxxx)->first()->id,
            ]);
        }
    }
}
