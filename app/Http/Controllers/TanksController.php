<?php

namespace App\Http\Controllers;

use App\Event;
use App\Tank;
use App\Ammo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\TankRequest;
use App\Notifications\TankCreated;
use App\Http\Requests\TankAjaxRequest;

class TanksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
            'only' => ['create', 'store', 'edit', 'update', 'destroy']
        ]);
        $this->middleware('can:wank,tank', [
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
        $tank = Tank::with(['user', 'ammo', 'event'])->latest()->paginate(10);

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

        $cover = $request->file('cover');

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
            'description' => request('description'),
            'cover' => ($cover ? $cover->store('covers', 'public') : null),
        ]);

        $tank->ammo()->sync(request('ammo'));

        $user = User::find(1);
        $user->notify(new TankCreated($tank));

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

    public function showAjax($idTank)
    {
        sleep(3);
        $tank = Tank::where('id', $idTank)->firstOrFail();


        return view('public.tanks.partials.dataShow', ['tank' => $tank]);
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
        $cover = $request->file('cover');

        if ($cover && $tank->cover) {
            Storage::disk('public')->delete($tank->cover);
        }

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

        $tank->ammo()->sync(request('ammo'));

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
        if ($tank->cover) {
            Storage::disk('public')->delete($tank->cover);
        }

        $tank->delete();
        $tank->ammo()->detach();

        return redirect('/tanks')
            ->with('message', "The tank '{$tank->name}' has been deleted.");
    }

    public function eliminarTanqueAjax($idTank)
    {
        sleep(3);
        $tank = Tank::where('id', $idTank)->firstOrFail();

        return "The tank '{$tank->name}' has been deleted";
    }

    public function editarAjax($idTank, Request $request)
    {
        sleep(3);
        /* $request->tank()->id;
        $idTank->update([
            'name' => request('name'),
            'ammo_id' => request('ammo'),
            'slug' => str_slug(request('name'), "-"),
            'event' => request('event')
        ]);
        $idTank->ammo()->sync(request('ammo'));*/

        //return redirect('/tanks/' . $idTank->slug);

    }
    /**
     * Crear
     *
     * @param  \App\Tank  $tank
     * @return \Illuminate\Http\Response
     */

    public function crearTanqueAjax()
    {

        sleep(3);
        return "EL TANQUE SE HA CREADO CORRECTAMENTE";
    }

    /**
     * Busqueda
     *
     * @param  \App\Tank  $tank
     * @return \Illuminate\Http\Response
     */

    public function searchAjax(Request $request)
    {
        sleep(3);
        /* echo "BUSQUEDA:".request('busqueda'); */
       
        $name = request('busqueda');

        $filtro = NULL;

        if ($name !== ""){
            $filtro =  Tank::where('name', 'like', "%{$name}%");    
        }

        $nation = request('selectBusqueda');
        if($nation !== ""){
            $filtro = Tank::where('nation', '=', $nation);
        }
        

        $tanks = $filtro->get();

        return view('public.tanks.partials.searchAjaxIndex', ['tanks' => $tanks]);
    }

     /**
     * Paginate
     *
     * @param  \App\Tank  $tank
     * @return \Illuminate\Http\Response
     */

    public function paginateAjax($numElementos)
    {
        $tank = Tank::skip($numElementos)->take(5)->get();
        sleep(3);
        $vista = ""; 
        if(count($tank) > 0){
                $vista = view('public.tanks.partials.tankPaginate',['tanks' => $tank]);
        }
        return $vista;
    }

}
