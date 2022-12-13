<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LugaresController extends Controller
{
    public function getIndex() {
        return view('lugares.index');
    }

    public function getShow($id) {
    return view('lugares.show', array('id'=>$id));
    }

    public function getCreate() {
        return view('lugares.create');
    }

    public function getEdit($id) {
            return view('lugares.edit', array('id'=>$id));
    }
}
