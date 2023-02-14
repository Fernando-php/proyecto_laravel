<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Mensaje;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke($categoria = 0){

        if($categoria == 0){
            $mensajes = Mensaje::all();
        }else{
            $mensajes = Mensaje::where('categoria_id',$categoria)->get();
        }

        $categorias = Categoria::all();

        return view('home', compact('categorias','mensajes'));
    }
}
