<?php

namespace App\Models\Backend\Administ\Probabil;

use Illuminate\Database\Eloquent\Model;

class Tipoprob extends Model
{
    protected $fillable = [
        'tipoprob',
    ];

    public function setTipoprobAttribute($value)
    {
        $this->attributes['tipoprob'] = strtoupper($value);
    }

    public function probabils()
    {
        return $this->hasMany(Probabil::class);
    }
}
