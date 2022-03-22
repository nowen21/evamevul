<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activo extends Model
{
    protected $fillable = [
        'activo',
    ];

    public function tablas()
    {
        return $this->hasMany(Tabla::class);
    }

    public function setActivoAttribute($value)
    {
        $this->attributes['activo'] = strtoupper($value);
    }
}
