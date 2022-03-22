<?php

use App\Models\Backend\Administ\Modvulne\Vulnerab;
use Illuminate\Database\Seeder;

class VulnerabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $m=1;
        // for ($i=1; $i < 6; $i++) { 
        //     for ($j=1; $j < 6; $j++) { 
        //         Vulnerab::create([
        //             'vulnerab'=>'VULNERABILIDAD '.$m,
        //           'activo_id'=>$i
        //         ]);

        //         $m++;
        //     }
        // }

        Vulnerab::create([
            'vulnerab' => "Interfaz de usuario complicada en el momento de subir los archivos a la plataforma", 'activo_id' => 1
        ]);
        Vulnerab::create([
            'vulnerab' => "Insuficiente supervisión de los empleados de la escuela que revisan la documentacion traida por los estudiantes", 'activo_id' => 1
        ]);
        Vulnerab::create([
            'vulnerab' => "No validación de los datos procesados.", 'activo_id' => 1
        ]);
        Vulnerab::create([
            'vulnerab' => "Descarga no controlada de Internet que extravie los documentos enviados por los estudiantes", 'activo_id' => 1
        ]);
        Vulnerab::create([
            'vulnerab' => "Falta de informacion del uso de plataformas para cargar los datos solicitados por la ESING.", 'activo_id' => 1
        ]);
        Vulnerab::create([
            'vulnerab' => "Control inadecuado del acceso físico.", 'activo_id' => 2
        ]);
        Vulnerab::create([
            'vulnerab' => "Ausencia de sistemas de identificación y autenticación.", 'activo_id' => 2
        ]);
        Vulnerab::create([
            'vulnerab' => "Conexiones a red pública desprotegidas, vulnerando con virus las plataformas de la ESING", 'activo_id' => 2
        ]);
        Vulnerab::create([
            'vulnerab' => "Falta de instrucciones para el cargue de documentacion del estudiante", 'activo_id' => 2
        ]);
        Vulnerab::create([
            'vulnerab' => "falta de informacion en cuanto a  los  lineamientos de los formatos solicitados ´por la escuela para evitar inconvenientes", 'activo_id' => 2
        ]);
        Vulnerab::create([
            'vulnerab' => "Falta de Guias, politicas, procedimientos y flujogramas para evitar equivocaciones de las personas cuando usan los servicios, datos, etc", 'activo_id' => 3
        ]);
        Vulnerab::create([
            'vulnerab' => "Falta de lineamientos que eviten el envío de información a través de un sistema o una red usando, accidentalmente, una ruta incorrecta que lleve la información a donde o por donde no es debido; puede tratarse de mensajes entre personas, entre procesos o entre unos y otros.", 'activo_id' => 3
        ]);
        Vulnerab::create([
            'vulnerab' => "Inadecuada gestión y protección de contraseñas.", 'activo_id' => 3
        ]);
        Vulnerab::create([
            'vulnerab' => "Protección física no apropiada.", 'activo_id' => 3
        ]);
        Vulnerab::create([
            'vulnerab' => "Falta de formación y conciencia sobre seguridad.", 'activo_id' => 3
        ]);
        Vulnerab::create([
            'vulnerab' => "Clasificación inadecuada de la información.", 'activo_id' => 4
        ]);
        Vulnerab::create([
            'vulnerab' => "Ausencia de sistemas de identificación y autenticación.", 'activo_id' => 4
        ]);
        Vulnerab::create([
            'vulnerab' => "Conexiones a red pública desprotegidas, vulnerando con virus las plataformas de la ESING", 'activo_id' => 4
        ]);
        Vulnerab::create([
            'vulnerab' => "Falta de instrucciones para el cargue de documentacion del estudiante", 'activo_id' => 4
        ]);
        Vulnerab::create([
            'vulnerab' => "falta de informacion en cuanto a  los  lineamientos de los formatos solicitados ´por la escuela para evitar inconvenientes", 'activo_id' => 4
        ]);
        Vulnerab::create([
            'vulnerab' => "la carencia de recursos suficientes provoca la caída del sistema cuando la carga de trabajo es desmesurada.", 'activo_id' => 5
        ]);
        Vulnerab::create([
            'vulnerab' => "Falta de controles pertinentes que eviten que los  equipos que hospedan datos, además se puedan  sufrir una fuga de información.", 'activo_id' => 5
        ]);
        Vulnerab::create([
            'vulnerab' => "falta de sistema contra incendios que protejan los recursos del sistema.", 'activo_id' => 5
        ]);
        Vulnerab::create([
            'vulnerab' => "Inadecuada gestión de capacidad del sistema.", 'activo_id' => 5
        ]);
        Vulnerab::create([
            'vulnerab' => "Inadecuada gestión de red.", 'activo_id' => 5
        ]);
    }
}
