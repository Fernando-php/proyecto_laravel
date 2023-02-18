<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Mensaje;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __invoke($categoria = 0){

        if($categoria == 0){
            $mensajes = Mensaje::simplePaginate(8);
        }else{
            $mensajes = Mensaje::where('categoria_id',$categoria)->simplePaginate(8);
        }

        $usuarios = User::all();
        $categorias = Categoria::all();
        $id_user_sesion = auth()->id();

        return view('welcome', compact('categorias','mensajes','usuarios','id_user_sesion'));
    }
}
