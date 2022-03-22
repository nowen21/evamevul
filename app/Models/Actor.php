<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $fillable = [
        'actor',
    ];

    public function setActorAttribute($value)
    {
        $this->attributes['actor'] = strtoupper($value);
    }
}
