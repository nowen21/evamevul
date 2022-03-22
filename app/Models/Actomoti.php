<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actomoti extends Model
{
    protected $fillable = [
        'acceacto_id',
        'motivo_id',
    ];

    public function acceacto()
    {
        return $this->belongsTo(Acceacto::class);
    }

    public function motivo()
    {
        return $this->belongsTo(Motivo::class);
    }
}
