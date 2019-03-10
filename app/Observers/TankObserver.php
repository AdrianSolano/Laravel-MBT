<?php

namespace App\Observers;

use App\Tank;

use App\Mail\TankCreated;
use Illuminate\Support\Facades\Mail;

class TankObserver
{
    public function created(Tank $tank)
    {
        Mail::to($tank->user->email)->send(
            new TankCreated($tank)
        );
    }
}
