<?php
namespace databese\seeds\Permisos;

use App\Traits\GestionPermisosSeedTrait;
use Illuminate\Database\Seeder;

class PermisoActivoSeeder extends Seeder
{
    use GestionPermisosSeedTrait;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->getModulo('adminxxx');
        $this->getPermisos('activoxx');
        $this->getPermisos('accesoxx');
        $this->getPermisos('actorxxx');
        $this->getPermisos('motivoxx');
        $this->getPermisos('resultad');

        $this->getPermisos('actiacce');
        $this->getPermisos('acceacto');
        $this->getPermisos('actomoti');
        $this->getPermisos('motiresu');
        $this->getPermisos('resuimpa');

        $this->getPermisos('resuprob');

        $this->getPermisos('tconsecu');
        $this->getPermisos('tipoprob');
        $this->getPermisos('probabil');
        $this->getPermisos('consecue');

        $this->getPermisos('consprob');

        $this->getLeerxxxx('vulnacti');
        $this->getPermisos('vulnerab');
        $this->getPermisos('herramie');
        $this->getPermisos('vulnacto');
        $this->getPermisos('actoherr');
        
        // $this->getModulo('modimpact');

        $this->getPermisos('impactox');
        $this->getPermisos('impanive');
    }
}
