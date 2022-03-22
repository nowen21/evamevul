<?php

namespace App\Models\Backend\Administ\Probabil;

use App\Models\Motiresu;
use Illuminate\Database\Eloquent\Model;

class Resuprob extends Model
{
    protected $fillable = [
        'probabil_id',
        'motiresu_id',
     ];

     public function probabil()
     {
         return $this->belongsTo(Probabil::class);
     }

     public function motiresu()
     {
         return $this->belongsTo(Motiresu::class);
     }
}
