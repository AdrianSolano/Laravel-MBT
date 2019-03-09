<?php

namespace App\Policies;

use App\User;
use App\Tank;
use Illuminate\Auth\Access\HandlesAuthorization;

class TankPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        if ($user->id == 3) return true;
    }

    public function touch(User $user, Tank $tank)
    {
        return $tank->user_id == $user->id || $user->id == 2;
    }
}
