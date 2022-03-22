<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motivo extends Model
{
    protected $fillable = [
        'motivo',
    ];

    public function setMotivoAttributte($value)
    {
        $this->attributes['motivo'] = strtoupper($value);
    }
}
