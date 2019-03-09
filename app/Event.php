<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['nameEvent', 'slug', 'year', 'description'];

    public function tanks()
    {
        return $this->hasMany(Tank::class);
        
    }
}
