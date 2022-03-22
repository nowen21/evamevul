<?php

namespace App\Models\Backend\Administ\Probabil;

use App\Models\Backend\Impactox\Nivel;
use App\Models\Motiresu;
use Illuminate\Database\Eloquent\Model;

class Probsuma extends Model
{
    
    protected $fillable = [
        'motiresu_id',
        'nivel_id',
        'totaprob'
     ];
   
     public function motiresu()
     {
         return $this->belongsTo(Motiresu::class);
     }

     public function nivel()
     {
         return $this->belongsTo(Nivel::class);
     }
}
