<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $fillable = ['name', 'slug'];

    public function modelos()
    {
        return $this->hasMany(Modelo::class);
    }

    public static function boot()
    {
        parent::boot();
        static::deleting(function ($user) { // before delete() method call this
            $user->modelos()->delete();
        });
    }
}
