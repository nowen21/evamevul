<?php

namespace App\Models\Backend\Impactox;

use App\Models\Motiresu;
use Illuminate\Database\Eloquent\Model;

class Resuimpa extends Model
{
   
    protected $fillable = [
        'motiresu_id',
        'impanive_id'
    ];
    
    public function motiresu()
    {
        return $this->belongsTo(Motiresu::class);
    }

    public function impanive()
    {
        return $this->belongsTo(Impanive::class);
    }

   
}
