<?php

namespace App\Traits;

use App\Models\Detatabl;

/**
 * 
 */
trait MigracionTrait
{
    public function getMigrar_bk($migrar = true)
    {
        $kk = 1;
        for ($t = 1; $t < 21; $t++) {
            if (!$migrar) {
                echo "tabla $t<br><br>";
            }
            $rowspant = 22;
            for ($a = 1; $a < 23; $a++) {
                $rowspana = 10;
                $actor = 1;
                for ($m = 1; $m < 3; $m++) {
                    $rowspanm = 5;
                    $motivo = 1;
                    for ($r = 1; $r < 6; $r++) {
                        if ($motivo  == 1) {
                            $rowspanm = 5;
                        }
                        if ($migrar) {
                            Detatabl::create([
                                "tabla_id" => $t,
                                "acceso_id" => $t,
                                "actor_id" => $a,
                                "motivo_id" => $m,
                                "resultad_id" => $r,
                                'rowspant' => $rowspant,
                                'rowspana' => $rowspana,
                                'rowspanm' => $rowspanm,
                            ]);
                        } else {
                            echo "tabla => $t, rowspant=> $rowspant, actor=>$a rowspana=>$rowspana $kk motivo=>$m  rowspanm =>$rowspanm $motivo <br>";
                        }
                        $actor++;
                        $motivo++;
                        $rowspant = 0;
                        $rowspana = 0;
                        $rowspanm = 0;
                        if ($kk % 10 == 0) {
                            $rowspana = 10;
                        }
                        $kk++;
                        if (!$migrar) {
                            echo "<br>";
                        }
                    }
                    if (!$migrar) {
                        echo "<br>";
                    }
                }
                if (!$migrar) {
                    echo "<br>";
                }
            }
            if (!$migrar) {
                echo "<br>";
            }
        }
    }
    public function getMigrar($migrar = true)
    {
        $kk = 1;
       
        for ($t = 1; $t < 21; $t++) {
            $motivoxx = 1;
            if (!$migrar) {
                echo "tabla $t<br><br>";
            }
            $rowspant = 22;
            $rowspana = 10;
            $rowspanm = 4;
            $contarxx = 1;
            $k=1;
            $r=1;
            $p=1;
            for ($a = 1; $a < 23; $a++) {

                if ($a == 1 || $a == 13) {
                    $rowspana = 10;
                }
                $actor = 1;
                if ($a > 11) {
                    $actor = 2;
                }

                if ($a == 11 || $a == 12) {
                    $rowspana = 1;
                }

                if ($contarxx  == 5 || $contarxx  == 6) {
                    $rowspanm = 1;
                }

                if ($contarxx == 7) {
                    $contarxx = 1;
                    $rowspanm = 4;
                }
                if ($p==6 || $p==12 || $p==17|| $p==18) {
                    $r=5;
                }

                if ($k == 6) {
                    if ($motivoxx == 1) {
                        $motivoxx = 2;
                        // if (!$migrar) {
                        //     echo "<br>";
                        // }
                    } else {
                        $motivoxx = 1;
                      
                    }
                }
                if ($migrar) {
                    Detatabl::create([
                        "tabla_id" => $t,
                        "acceso_id" => $t,
                        "actor_id" => $actor,
                        "motivo_id" => $motivoxx,
                        "resultad_id" => $r,
                        'rowspant' => $rowspant,
                        'rowspana' => $rowspana,
                        'rowspanm' => $rowspanm,
                    ]);
                } else {
                    echo "tabla => $t, rowspant=> $rowspant, actor=>$actor rowspana=>$rowspana , 
                    rowspanm => $rowspanm ==  $contarxx motivo => $motivoxx resultad = $r ===> $p<br>"; 
                }

                if ($r==5) {
                    $r=0;
                }
                $r++;
                
                if ($k == 11) {
                    $k = 0;
                    if ($motivoxx == 1) {
                        $motivoxx = 2;
                    } else {
                        $motivoxx = 1;
                    }
                }

                if ($kk % 11 == 0) {
                    if (!$migrar) {
                        echo "<br>";
                    }
                }

              
                $contarxx++;
                $k++;
                $actor++;
                $rowspant = 0;
                $rowspana = 0;
                $rowspanm = 0;
                $kk++;

                $p++;
            }
            if (!$migrar) {
                echo "<br>";
            }
        }
        if (!$migrar) {
            echo "<br>";
        }
    }
}
