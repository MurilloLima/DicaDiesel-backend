<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Indice extends Model
{
    protected $fillable = [
        'modelo_id',
        'title',
        'content'
    ];

    public function modelo()
    {
        return $this->belongsTo(Modelo::class);
    }
}
