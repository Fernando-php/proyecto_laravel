<?php

namespace App\Http\Controllers;
use App\Models\Mensaje;
use Illuminate\Http\Request;
use App\Models\Categoria;

class MessagesController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        //$this->middleware('auth', ['only'=>['create','']]);
        // $this->middleware('auth',['except'=>'index','show']);
    }

    /*public function index(){

        $mensajes= Mensaje::paginate();

        return view('Mensajes.index',compact('mensajes'));
        //return "Aquí tendremos el listado de mensajes";
    }*/ //Esta funcion la tenemos en el home


    public function create(){
        $categorias = Categoria::all();
        return view('mensajes.create',compact('categorias'));
        //return "Aquí crearemos un nuevo mensaje";
    }

    public function store(Request $request){

        //Para verificar que los campos no son nulos;
        $request->validate([
            "titulo"=>'required',
            "descripcion"=>'required',
            "categoria"=>'required'
        ]);

        $mensaje=new Mensaje();
        $mensaje->titulo=$request->titulo;
        $mensaje->descripcion=$request->descripcion;
        $mensaje->categoria_id=$request->categoria_id;
        $mensaje->save();
        return redirect()->route('mensajes.show',$mensaje);
    }


    public function show(Mensaje $mensaje){
        return view('mensajes.show',compact('mensaje'));
        //return "Aquí editaremos un mensaje";
    }

    public function edit(Mensaje $mensaje){
        return view('mensajes.edit',compact('mensaje'));
    }

    public function update(Request $request, Mensaje $mensaje){

         //Para verificar que los campos no son nulos;
        $request->validate([
            "titulo"=>'required',
            "descripcion"=>'required',
            "categoria"=>'required'
        ]);
        $mensaje->titulo=$request->titulo;
        $mensaje->descripcion=$request->descripcion;
        $mensaje->categoria_id=$request->categoria_id;
        $mensaje->save();
        return redirect()->route('mensajes.show',$mensaje);

    }

    public function destroy(Mensaje $mensaje){
        $mensaje->delete();
        return redirect()->route('mensajes.index');
    }
}

