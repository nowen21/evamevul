<?php

use App\Models\Backend\Administ\Probabil\Consecue;
use Illuminate\Database\Seeder;

class ConsecueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $m = 1;
        for ($i = 1; $i < 6; $i++) {
            for ($j = 1; $j < 7; $j++) {
                Consecue::create([
                    'consecue' => 'CONSECUENCIA ' . $m,
                    'tconsecu_id' => $i
                ]);
                $m++;
            }
        }
    }
}
