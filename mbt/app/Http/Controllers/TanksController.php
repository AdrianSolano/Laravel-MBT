<?php

namespace App\Http\Controllers;

use App\Tank;
use Illuminate\Http\Request;
use App\Http\Requests\TankRequest;

class TanksController extends Controller
{
  /**
       * Display a listing of the resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function index()
      {
          $tanks = Tank::paginate(10);

          return view('public.tanks.index');
      }

      /**
       * Show the form for creating a new resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function create()
      {
          return view('public.tanks.create');
      }

      /**
       * Store a newly created resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @return \Illuminate\Http\Response
       */

      public function store(TankRequest $request)
      {
          Tank::create([
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
          $tank = Tank::where('slug', $slug)->firstOrFail();

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
          return view('public.tanks.edit', ['tank' => $tank]);
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

          return redirect('/tanks/'.$tank->slug);
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

          return redirect('/');
      }
}
