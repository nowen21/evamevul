<?php

namespace App\Models\Backend\Administ\Probabil;

use App\Models\Backend\Impactox\Nivel;
use Illuminate\Database\Eloquent\Model;

class Probabil extends Model
{
    protected $fillable = [
        'nivel_id',
        'tipoprob_id',
        'probabil',// dependiendo de las probabilidades que tenga ese nivel
     ];

     public function nivel()
     {
         return $this->belongsTo(Nivel::class);
     }
    
     public function tipoprob()
     {
         return $this->belongsTo(Tipoprob::class);
     }
}
