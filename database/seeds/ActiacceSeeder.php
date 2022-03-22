<?php

use App\Models\Acceso;
use App\Models\Actiacce;
use App\Models\Activo;
use Illuminate\Database\Seeder;

class ActiacceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // foreach (Activo::get() as $key => $activo) {
        //     foreach (Acceso::get() as $key => $acceso) {
        //         Actiacce::create([
        //             'activo_id' => $activo->id,
        //             'acceso_id' => $acceso->id,
        //         ]);
        //     }
        // }
        Actiacce::create(['activo_id' => 1,'acceso_id'=> 1,]);
        Actiacce::create(['activo_id' => 1,'acceso_id'=> 2,]);
        Actiacce::create(['activo_id' => 1,'acceso_id'=> 5,]);
        Actiacce::create(['activo_id' => 1,'acceso_id'=> 4,]);
        Actiacce::create(['activo_id' => 2,'acceso_id'=> 1,]);
        Actiacce::create(['activo_id' => 2,'acceso_id'=> 2,]);
        Actiacce::create(['activo_id' => 2,'acceso_id'=> 3,]);
        Actiacce::create(['activo_id' => 2,'acceso_id'=> 4,]);
        Actiacce::create(['activo_id' => 3,'acceso_id'=> 1,]);
        Actiacce::create(['activo_id' => 3,'acceso_id'=> 2,]);
        Actiacce::create(['activo_id' => 3,'acceso_id'=> 3,]);
        Actiacce::create(['activo_id' => 3,'acceso_id'=> 4,]);
        Actiacce::create(['activo_id' => 4,'acceso_id'=> 1,]);
        Actiacce::create(['activo_id' => 4,'acceso_id'=> 2,]);
        Actiacce::create(['activo_id' => 4,'acceso_id'=> 3,]);
        Actiacce::create(['activo_id' => 4,'acceso_id'=> 4,]);
        Actiacce::create(['activo_id' => 5,'acceso_id'=> 1,]);
        Actiacce::create(['activo_id' => 5,'acceso_id'=> 2,]);
        Actiacce::create(['activo_id' => 5,'acceso_id'=> 3,]);
        Actiacce::create(['activo_id' => 5,'acceso_id'=> 4,]);
        Actiacce::create(['activo_id' => 1,'acceso_id'=> 3,]);
        Actiacce::create(['activo_id' => 2,'acceso_id'=> 5,]);
        Actiacce::create(['activo_id' => 2,'acceso_id'=> 5,]);
    }
}
