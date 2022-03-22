<?php

use App\Models\Motivo;
use Illuminate\Database\Seeder;

class MotivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Motivo::create([
            'motivo'=>'ACCIDENTAL',
        ]);

        Motivo::create([
            'motivo'=>'INTENCIONAL',
        ]);

        // Motivo::create([
        //     'motivo'=>'N/A',
        // ]);
    }
}
