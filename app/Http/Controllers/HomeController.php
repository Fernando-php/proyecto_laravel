<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Mensaje;
use App\Models\Users;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke($categoria = 0){

        if($categoria == 0){
            $mensajes = Mensaje::paginate(8);
        }else{
            $mensajes = Mensaje::where('categoria_id',$categoria)->paginate(8);
        }

        $categorias = Categoria::all();

        return view('welcome', compact('categorias','mensajes'));
    }
}
