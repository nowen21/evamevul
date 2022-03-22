<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resultad extends Model
{
    protected $fillable = [
        'resultad',
    ];
    public function setResultadAttributte($value)
    {
        $this->attributes['resultad'] = strtoupper($value);
    }
}
