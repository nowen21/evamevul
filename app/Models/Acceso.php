<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Acceso extends Model
{
    protected $fillable = [
        'acceso',
    ];

    public function setAccesoAttributte($value)
    {
        $this->attributes['acceso'] = strtoupper($value);
    }
}
