<?php

namespace App\Models\Backend\Administ\Probabil;

use Illuminate\Database\Eloquent\Model;

class Consprob extends Model
{
    protected $fillable = [
        'consecue_id',
        'probabil_id',
     ];

     public function consecue()
     {
        return $this->belongsTo(Consecue::class);
     }

     public function probabil()
     {
        return $this->belongsTo(Probabil::class);
     }
}
