<?php

namespace App\Models\Backend\Administ\Modvulne;

use Illuminate\Database\Eloquent\Model;

class Herramie extends Model
{
    protected $fillable = [
        'herramie',
    ];

    public function setHerramieAttribute($value)
    {
        $this->attributes['herramie'] = strtoupper($value);
    }
}
