<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LugaresController extends Controller
{
    public function getIndex() {
         $lugares = self::$arrayLugares;
        return view('lugares.index', array('arrayLugares' => $lugares));
    }

    public function getShow($id) {
    return view('lugares.show', array('lugar'=>self::$arrayLugares[$id], 'id'=>$id));
    }

    public function getCreate() {
        return view('lugares.create');
    }

    public function getEdit($id) {
            return view('lugares.edit', array('lugar'=>self::$arrayLugares[$id], 'id'=>$id));
    }

private static $arrayLugares = array(
    array(
        'nombre' => 'VivaGym',
        'tipo' => 'Gimnasio',
        'ubicacion' => '37.60637867077194, -0.9847303441361448',
        'imagen' => 'https://funziona.fit/wp-content/uploads/2019/01/VIVA-COLOR.jpg'
     ),
    array(
        'nombre' => 'Synergym',
        'tipo' => 'Gimnasio',
        'ubicacion' => '37.617213582665784, -0.9958199840974316',
        'imagen' => 'https://ponferradahoy.com/wp-content/uploads/2022/05/construccion-de-gimnasio-synergim-2.jpg'
    ),
    array(
        'nombre' => 'Chef Momo',
        'tipo' => 'Restaurante',
        'ubicacion' => '37.60125811981153, -0.9855456772683788',
        'imagen' => 'https://media-cdn.tripadvisor.com/media/photo-s/0f/a8/0b/f2/chef-momo-restaurante.jpg'
    )
);
}
