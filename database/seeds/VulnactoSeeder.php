<?php

use App\Models\Backend\Administ\Modvulne\Actoherr;
use App\Models\Backend\Administ\Modvulne\Vulnacto;
use Illuminate\Database\Seeder;

class VulnactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 26; $i++) {
            for ($j = 3; $j < 6; $j++) {
                Vulnacto::create([
                    'actor_id'=>$j,
                    'vulnerab_id'=>$i
                ]);
            }
        }
    }
}
