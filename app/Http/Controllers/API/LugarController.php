<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lugar;
use App\Http\Resources\LugarResource;

class LugarController extends Controller
{
    public function index(Request $request)
    {
        $busqueda = $request->input('filter');
        $numElementos = $request->input('numElements');
        $registrosLugares =
            ($busqueda && array_key_exists('q', $busqueda))
            ? Lugar::where('name', 'like', '%' .$busqueda['q'] . '%')
                ->paginate($numElementos)
            : Lugar::paginate($numElementos);

            return LugarResource::collection($registrosLugares);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lugar = json_decode($request->getContent(), true);
        $lugarData = $lugar['data']['attributes'];

        $lugar = Lugar::create($lugarData);

        return new LugarResource($lugar);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Lugar $lugar)
    {
        return new LugarResource($lugar);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lugar $lugar)
    {
        $lugarData = json_decode($request->getContent(), true);
        $lugar->update($lugarData['data']['attributes']);

        return new LugarResource($lugar);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lugar $lugar)
    {
        $lugar->delete();
    }
}
