<?php

namespace App\Models\Backend\Impactox;

use Illuminate\Database\Eloquent\Model;

class Impasuma extends Model
{
    protected $fillable = [
       'motiresu_id',
       'nivel_id',
       'totaimpa'
    ];
    
    public function nivel()
    {
        return $this->belongsTo(Nivel::class);
    }
}
