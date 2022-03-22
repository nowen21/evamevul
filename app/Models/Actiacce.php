<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actiacce extends Model
{
    protected $fillable = [
        'activo_id',
        'acceso_id',
    ];

    public function activo()
    {
        return $this->belongsTo(Activo::class);
    }

    public function acceso()
    {
        return $this->belongsTo(Acceso::class);
    }
}
