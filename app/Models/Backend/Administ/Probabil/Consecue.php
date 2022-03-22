<?php

namespace App\Models\Backend\Administ\Probabil;

use Illuminate\Database\Eloquent\Model;

class Consecue extends Model
{
    protected $fillable = [
        'consecue',
        'tconsecu_id'
    ];
    
    public function setConsecueAttribute($value)
    {
        $this->attributes['consecue'] = strtoupper($value);
    }

    public function tconsecu()
    {
       return $this->belongsTo(Tconsecu::class);
    }
}
