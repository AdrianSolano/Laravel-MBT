<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Tank;


class UserTanksController extends Controller
{
    public function index($userSlug)
    {
        $user = User::where('slug', $userSlug)->firstOrFail();
        $tank = $user->tank()->paginate(10);

        return view('public.usertanks.index', [
            'user'  => $user,
            'tank' => $tank
        ]);
    }
}
