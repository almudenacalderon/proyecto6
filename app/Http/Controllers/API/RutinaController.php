<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rutina;
use App\Http\Resources\RutinaResource;

class RutinaController extends Controller
{
    public function index(Request $request)
    {
        $busqueda = $request->input('filter');
        $numElementos = $request->input('numElements');
        $registrosRutinas =
            ($busqueda && array_key_exists('q', $busqueda))
            ? Rutina::where('name', 'like', '%' .$busqueda['q'] . '%')
                ->paginate($numElementos)
            : Rutina::paginate($numElementos);

            return RutinaResource::collection($registrosRutinas);
    }

    public function store(Request $request)
    {
        $rutina = json_decode($request->getContent(), true);
        $rutinaData = $rutina['data']['attributes'];

        $rutina = Rutina::create($rutinaData);

        return new RutinaResource($rutina);
    }


    public function show(Rutina $rutina)
    {
        return new RutinaResource($rutina);
    }


    public function update(Request $request, Rutina $rutina)
    {
        $rutinaData = json_decode($request->getContent(), true);
        $rutina->update($rutinaData['data']['attributes']);

        return new RutinaResource($rutina);
    }


    public function destroy(Rutina $rutina)
    {
        $rutina->delete();
    }
}
