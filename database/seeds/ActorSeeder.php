<?php

use App\Models\Actor;
use Illuminate\Database\Seeder;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Actor::create([
            'actor'=>'INTERIOR',
        ]);

        Actor::create([
            'actor'=>'EXTERIOR',
        ]);

        Actor::create([
            'actor'=>'PERSONAL INTERNO DE IT',
        ]);
        Actor::create([
            'actor'=>'EXPERTO EXTERNO',
        ]);

        Actor::create([
            'actor'=>'PROVEEDOR DE SERVICIOS ADMINISTRADOS O CONTRATISTAS',
        ]);
    }
}
