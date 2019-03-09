<?php

namespace App\Http\Controllers;

use App\Event;
use App\Tank;
use App\Ammo;
use Illuminate\Http\Request;
use App\Http\Requests\TankRequest;

class TanksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
            'only' => ['create', 'store', 'edit', 'update', 'destroy']
        ]);
        $this->middleware('can:touch,tank', [
            'only' => ['edit', 'update', 'destroy']
        ]);
    }


    /**
       * Display a listing of the resource.
       *
       * @return \Illuminate\Http\Response
       */
    public function index()
    {
        $tank = Tank::with(['user', 'ammo', 'event'])
            ->latest()
            ->paginate(10);

        return view('public.tanks.index')->with('tank', $tank);
    }

    /**
       * Show the form for creating a new resource.
       *
       * @return \Illuminate\Http\Response
       */
    public function create()
    {
        $event = Event::all();
        $ammo = Ammo::all();

        return view('public.tanks.create', [
            'event' => $event,
            'ammo'    => $ammo
        ]);
    }

    /**
       * Store a newly created resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @return \Illuminate\Http\Response
       */

    public function store(TankRequest $request)
    {
        $tank = Tank::create([
            'user_id' => $request->user()->id,
            'event_id' => request('event'),
            'name' => request('name'),
            'slug' => str_slug(request('name'), "-"),
            'nation' => request('nation'),
            'crew' => request('crew'),
            'hp' => request('hp'),
            'ammo' => request('ammo'),
            'type' => request('type'),
            'mainweapon' => request('mainweapon'),
            'secondaryweapon' => request('secondaryweapon'),
            'description' => request('description')
        ]);
        
        $tank->ammo()->sync( request('ammo') );

        return redirect('/');
    }

    /**
       * Display the specified resource.
       *
       * @param  \App\Tank  $tank
       * @return \Illuminate\Http\Response
       */
    public function show($slug)
    {   
        $tank = Tank::with('ammo')->where('slug', $slug)->firstOrFail();
       
        return view('public.tanks.show', ['tank' => $tank]);
    }

    /**
       * Show the form for editing the specified resource.
       *
       * @param  \App\Tank  $tank
       * @return \Illuminate\Http\Response
       */
    public function edit(Tank $tank)
    {   
        $event = Event::all();
        $ammo = Ammo::all();

        return view('public.tanks.edit', [
            'tank' => $tank,
            'ammo' => $ammo,
            'event' => $event,
            
        ]);
    }

    /**
       * Update the specified resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @param  \App\Tank  $tank
       * @return \Illuminate\Http\Response
       */
    public function update(TankRequest $request, Tank $tank)
    {
        $tank->update([
            'name' => request('name'),
            'event_id' => request('event'),
            'slug' => str_slug(request('name'), "-"),
            'nation' => request('nation'),
            'crew' => request('crew'),
            'hp' => request('hp'),
            'ammo' => request('ammo'),
            'type' => request('type'),
            'mainweapon' => request('mainweapon'),
            'secondaryweapon' => request('secondaryweapon'),
            'description' => request('description')
        ]);

        $tank->ammo()->sync( request('ammo') );

        return redirect('/tanks/' . $tank->slug);
    }

    /**
       * Remove the specified resource from storage.
       *
       * @param  \App\Tank  $tank
       * @return \Illuminate\Http\Response
       */
    public function destroy(Tank $tank)
    {
        $tank->delete();
        $tank->ammo()->detach();

        return redirect('/tanks')
            ->with('message', "The tank '{$tank->name}' has been deleted.");
    }
}
