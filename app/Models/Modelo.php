<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    protected $fillable = [
        'name',
        'ref',
        'marca_id'
    ];

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }

    public function indices()
    {
        return $this->hasMany(Indice::class);
    }

    public static function boot()
    {
        parent::boot();
        static::deleting(function ($user) { // before delete() method call this
            $user->indices()->delete();
        });
    }
}
