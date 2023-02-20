<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Entrenador;
use App\Http\Resources\EntrenadorResource;

class EntrenadorController extends Controller
{
    public function index(Request $request)
    {
        $busqueda = $request->input('filter');
        $numElementos = $request->input('numElements');
        $registrosEntrenadores =
            ($busqueda && array_key_exists('q', $busqueda))
            ? Entrenador::where('name', 'like', '%' .$busqueda['q'] . '%')
                ->paginate($numElementos)
            : Entrenador::paginate($numElementos);

            return EntrenadorResource::collection($registrosEntrenadores);
    }

    public function store(Request $request)
    {
        $entrenador = json_decode($request->getContent(), true);
        $entrenadorData = $entrenador['data']['attributes'];

        $entrenador = Entrenador::create($entrenadorData);

        return new EntrenadorResource($entrenador);
    }


    public function show(Entrenador $entrenador)
    {
        return new EntrenadorResource($entrenador);
    }


    public function update(Request $request, Entrenador $entrenador)
    {
        $entrenadorData = json_decode($request->getContent(), true);
        $entrenador->update($entrenadorData['data']['attributes']);

        return new EntrenadorResource($entrenador);
    }


    public function destroy(Ejercicio $ejercicio)
    {
        $ejercicio->delete();
    }
}

