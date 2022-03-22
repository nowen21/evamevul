<?php

namespace App\Models\Backend\Administ\Modvulne;

use App\Models\Activo;
use Illuminate\Database\Eloquent\Model;

class Vulnerab extends Model
{
    protected $fillable = [
        'vulnerab',
        'activo_id'
    ];

    public function setVulnerabAttribute($value)
    {
        $this->attributes['vulnerab'] = strtoupper($value);
    }

    public function activo()
    {
        return $this->belongsTo(Activo::class);
    }
}
