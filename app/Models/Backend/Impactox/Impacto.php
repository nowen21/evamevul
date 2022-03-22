<?php

namespace App\Models\Backend\Impactox;

use Illuminate\Database\Eloquent\Model;

class Impacto extends Model
{
    protected $fillable = [
        'impacto',
    ];

    public function setImpactoAttribute($value)
    {
        $this->attributes['impacto'] = strtoupper($value);
    }

    public function impanives()
    {
       return $this->hasMany(Impanive::class);
    }
}
