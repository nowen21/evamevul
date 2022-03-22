<?php

namespace App\Models\Backend\Impactox;

use Illuminate\Database\Eloquent\Model;

class Impanive extends Model
{
    protected $fillable = [
        'nivel_id',
        'impacto_id',
        'impanive', // el valor del nivel se divide en el número de impactos a los que se haya asignado
    ];
    public function nivel()
    {
        return $this->belongsTo(Nivel::class);
    }

    public function impacto()
    {
        return $this->belongsTo(Impacto::class);
    }

    public function resuimpas()
    {
        return $this->hasMany(Resuimpa::class);
    }
}
