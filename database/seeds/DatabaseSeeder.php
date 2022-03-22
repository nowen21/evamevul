<?php

use databese\seeds\Permisos\PermisoActivoSeeder;
use databese\seeds\Permisos\SuperAdministradorSeeder;
use databese\seeds\Permisos\SuperAdminSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PermisoActivoSeeder::class);
        $this->call(SuperAdminSeeder::class);
        $this->call(SuperAdministradorSeeder::class);
        $this->call(AccesoSeeder::class);
        $this->call(ActivoSeeder::class);
        $this->call(ActorSeeder::class);
        $this->call(MotivoSeeder::class);
        $this->call(ResultadSeeder::class);

        
        $this->call(ActiacceSeeder::class);
        $this->call(AcceactoSeeder::class);
        $this->call(ActomotiSeeder::class);
        $this->call(MotiresuSeeder::class);

        // * IMPACTO
        $this->call(NivelSeeder::class);
        $this->call(ImpactoSeeder::class);
        $this->call(ImpaniveSeeder::class);
        $this->call(ResuimpaSeeder::class);
        $this->call(ImpasumaSeeder::class);
        // * PROBABILIDAD

        $this->call(TconsecuSeeder::class);
        $this->call(TipoprobSeeder::class);
        $this->call(ProbabilSeeder::class);
       
        $this->call(ResuprobSeeder::class);
        $this->call(ProbsumaSeeder::class);
        $this->call(MetodoSeeder::class);
        $this->call(ProbimpaSeeder::class);
        $this->call(ConsecueSeeder::class);

        $this->call(HerramieSeeder::class);
        $this->call(VulnerabSeeder::class);
        $this->call(VulnactoSeeder::class);
        $this->call(ActoherrSeeder::class);
    }
}
