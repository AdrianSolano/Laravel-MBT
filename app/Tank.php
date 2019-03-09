<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tank extends Model
{
  protected $fillable = ['user_id', 'event_id','name', 'slug', 'nation','crew','hp','ammo','type','mainweapon','secondaryweapon', 'description'];


  public function user()
  {
      return $this->belongsTo(User::class);
  }

  public function event()
  {
      return $this->belongsTo(Event::class);
  }

  public function ammo()
  {
      return $this->belongsToMany(Ammo::class);
  }
}
