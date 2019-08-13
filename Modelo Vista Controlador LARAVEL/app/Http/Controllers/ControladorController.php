<?php

namespace App\Http\Controllers;

use App\Modelo;
use Illuminate\Http\Request;

class ControladorController extends Controller
{
    public function vista(){
        return view('vista');
    }

    public function vistamodelos(){
        $modelos = Modelo::all();

        return view('vistamodelo',compact('modelos'));

    }
}
