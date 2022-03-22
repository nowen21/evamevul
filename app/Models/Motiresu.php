<?php

namespace App\Models;

use App\Models\Backend\Administ\Probabil\Probsuma;
use App\Models\Backend\Administ\Probabil\Resuprob;
use App\Models\Backend\Impactox\Impasuma;
use App\Models\Backend\Impactox\Resuimpa;
use Illuminate\Database\Eloquent\Model;

class Motiresu extends Model
{
    protected $fillable = [
        'actomoti_id',
        'resultad_id',
    ];

    public function actomoti()
    {
       return $this->belongsTo(Actomoti::class);
    }

    public function resultad()
    {
       return $this->belongsTo(Resultad::class);
    }
    public function resuimpas()
    {
        return $this->hasMany(Resuimpa::class);
    }

    public function resuprobs()
    {
        return $this->hasMany(Resuprob::class);
    }
 
    public function impasuma()
    {
        return $this->hasOne(Impasuma::class);
    }

    public function probsuma()
    {
        return $this->hasOne(Probsuma::class);
    }
    
}
