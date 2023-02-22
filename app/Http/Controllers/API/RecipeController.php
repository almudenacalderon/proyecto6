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
        $type = "?type="."public";
        $diet = "&diet="."balanced";

        //se pueden añadir campos a la url sin valor para poder usarlos mas adelante con los filtros
        //$q = "&q=Noodle";
        $q="";

        // La key la cogeremos de las variables de entorno

        $app_id = "&app_id=".env("API_ID");
        $app_key = "&app_key=".env("API_KEY");
        $urlEdamamAPI = "https://api.edamam.com/api/recipes/v2";
        $queryString = "$type$q$app_id$app_key$diet";
        $urlConsulta = $urlEdamamAPI . $queryString;
        // Consultamos a la API
        $response = Http::get($urlConsulta);
        return RecipeResource::collection($response->collect()->toArray()['hits']);
    }
}
