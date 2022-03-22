<?php

namespace App\Models\Backend\Administ\Modvulne;

use Illuminate\Database\Eloquent\Model;

class Actoherr extends Model
{
    protected $fillable = [
        'herramie_id',
        'vulnacto_id',
    ];

    public function herramie()
    {
        return $this->belongsTo(Herramie::class);
    }
    public function vulnacto()
    {
        return $this->belongsTo(Vulnacto::class);
    }
}
