<?php

namespace App\Models\Backend\Administ\Modvulne;

use App\Models\Actor;
use Illuminate\Database\Eloquent\Model;

class Vulnacto extends Model
{
    protected $fillable = [
        'actor_id',
        'vulnerab_id'
    ];
   
    public function actor()
    {
       return $this->belongsTo(Actor::class);
    }

    public function vulnerab()
    {
       return $this->belongsTo(Vulnerab::class);
    }
}
