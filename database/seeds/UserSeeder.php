<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user= User::create([
            'name'=>'José Dúmar Jiménez Ruíz', 'email'=>'nowen21@gmail.com', 'password'=>'N0w3n2104$',
        ]);
        $user->assignRole('SUPER-ADMINISTRADOR');

        $user=User::create([
            'name'=>'Ruth Cuervo Ordóñez', 'email'=>'ruth@gmail.com', 'password'=>'40025585',
        ]);
        $user->assignRole('SUPER-ADMINISTRADOR');
        $user=User::create([
            'name'=>'Juan Gabriel Bustos Aldana', 'email'=>'juan@gmail.com', 'password'=>'80880111',
        ]);
        $user->assignRole('SUPER-ADMINISTRADOR');

        $user=User::create([
            'name'=>'Manuel Alejandro Vargas', 'email'=>'manuel@gmail.com', 'password'=>'M4nu3l@$',
        ]);
        $user->assignRole('SUPER-ADMINISTRADOR');
    }
}
