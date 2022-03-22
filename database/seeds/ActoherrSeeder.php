<?php

use App\Models\Backend\Administ\Modvulne\Actoherr;
use Illuminate\Database\Seeder;

class ActoherrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 101; $i++) {
            for ($j = 1; $j < 3; $j++) {
                Actoherr::create([
                    'herramie_id'=>$j,
                    'vulnacto_id'=>$i
                ]);
            }
        }
    }
}
