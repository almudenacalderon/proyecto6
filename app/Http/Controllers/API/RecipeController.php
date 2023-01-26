<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Http\Resources\RecipeResource;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Inicialmente, vamos a utilizar un autor constante
        $busqueda = $request->input('filter');
        $type = "public";
        $diet = "balanced";
        // La key la cogeremos de las variables de entorno

        $id = env("API_ID");
        $key = env("API_KEY");
        $urlEdamamAPI = "https://api.edamam.com/api/recipes/v2";
        $queryString = "?type=$type&app_id=$id&app_key=$key&diet=$diet";
        $urlConsulta = $urlEdamamAPI . $queryString;
        // Consultamos a la API
        $response = Http::get($urlConsulta);
        return RecipeResource::collection($response->collect()->toArray()['hits']);
    }
}
