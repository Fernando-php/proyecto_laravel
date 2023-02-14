<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{

    public function create(){
        return view('mensajes.create');
        //return "Aquí crearemos un nuevo mensaje";
    }

    public function edit(){
        return view('mensajes.edit');
        //return "Aquí editaremos un mensaje";
    }
}
