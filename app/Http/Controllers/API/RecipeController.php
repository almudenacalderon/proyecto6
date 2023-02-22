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
        $busqueda = $request->input('filter');
        if ($busqueda && array_key_exists('q', $busqueda)) {
           $q= "&q=".$busqueda['q'];
        } else {
            //búsqueda por defecto o inicial, cuando el usuario no pone nada en el search
            $q="&q=crispy";
        }
        $type = "?type="."public";
        $app_id = "&app_id=".env("API_ID");
        $app_key = "&app_key=".env("API_KEY");
        $urlEdamamAPI = "https://api.edamam.com/api/recipes/v2";
        $queryString = "$type$q$app_id$app_key";
        $urlConsulta = $urlEdamamAPI . $queryString;
        // Consultamos a la API
        $response = Http::get($urlConsulta);
        return RecipeResource::collection($response->collect()->toArray()['hits']);
    }
}
