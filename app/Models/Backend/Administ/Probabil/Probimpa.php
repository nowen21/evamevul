<?php

namespace App\Models\Backend\Administ\Probabil;

use App\Models\Backend\Administ\Metodoxx\Metodo;
use App\Models\Backend\Impactox\Impasuma;
use App\Models\Backend\Impactox\Nivel;
use App\Models\Motiresu;
use Illuminate\Database\Eloquent\Model;

class Probimpa extends Model
{
    protected $fillable = [
        'nivel_id',
        'motiresu_id',
        'probsuma_id',
        'impasuma_id',
        'riesgoxx',
        'metodo_id',
     ];

     public function nivel()
     {
         return $this->belongsTo(Nivel::class);
     }

     public function metodo()
     {
         return $this->belongsTo(Metodo::class);
     }

     public function motiresu()
     {
         return $this->belongsTo(Motiresu::class);
     }

     public function probsuma()
     {
         return $this->belongsTo(Probsuma::class);
     }

     public function impasuma()
     {
         return $this->belongsTo(Impasuma::class);
     }
}
