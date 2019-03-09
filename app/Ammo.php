<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ammo extends Model
{
    public function tanks()
    {
        return $this->belongsToMany(Tank::class);
    }
}
