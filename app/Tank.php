<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tank extends Model
{
  protected $fillable = ['name', 'slug', 'nation','crew','hp','ammo','type','mainweapon','secondaryweapon', 'description'];

}
