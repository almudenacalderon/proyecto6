<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ejercicio;
use App\Http\Resources\EjercicioResource;

class EjercicioController extends Controller
{
    public function index(Request $request)
    {
        $busqueda = $request->input('filter');
        $numElementos = $request->input('numElements');
        $registrosEjercicios =
            ($busqueda && array_key_exists('q', $busqueda))
            ? Ejercicio::where('name', 'like', '%' .$busqueda['q'] . '%')
                ->paginate($numElementos)
            : Ejercicio::paginate($numElementos);

            return EjercicioResource::collection($registrosEjercicios);
    }

    public function store(Request $request)
    {
        $ejercicio = json_decode($request->getContent(), true);
        $ejercicioData = $ejercicio['data']['attributes'];

        $ejercicio = Ejercicio::create($ejercicioData);

        return new EjercicioResource($ejercicio);
    }


    public function show(Ejercicio $ejercicio)
    {
        return new EjercicioResource($ejercicio);
    }


    public function update(Request $request, Ejercicio $ejercicio)
    {
        $ejercicioData = json_decode($request->getContent(), true);
        $ejercicio->update($ejercicioData['data']['attributes']);

        return new EjercicioResource($ejercicio);
    }


    public function destroy(Ejercicio $ejercicio)
    {
        $ejercicio->delete();
    }
}
