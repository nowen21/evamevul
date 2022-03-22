<?php

namespace App\Models\Backend\Administ\Probabil;

use Illuminate\Database\Eloquent\Model;

class Tconsecu extends Model
{
    protected $fillable = [
        'tconsecu',
    ];

    public function setTconsecuAttribute($value)
    {
        $this->attributes['tconsecu'] = strtoupper($value);
    }
}
