<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Mensaje;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){

        $categorias = Categoria::all();
        $mensajes = Mensaje::all();

        return view('home', compact('categorias','mensajes'));
    }
}
