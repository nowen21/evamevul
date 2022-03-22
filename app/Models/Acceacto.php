<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Acceacto extends Model
{
    protected $fillable = [
        'actiacce_id',
        'actor_id',
    ];

    public function actiacce()
    {
        return $this->belongsTo(Actiacce::class);
    }

    public function actor()
    {
        return $this->belongsTo(Actor::class);
    }
}
