<?php

namespace App\Http\Controllers;
use App\Models\Mensaje;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\User;

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
        session()->flash('status','Mensaje creado correctamente');
        //Para verificar que los campos no son nulos;
        $request->validate([
            "titulo"=>'required',
            "descripcion"=>'required',
            "categoria"=>'required'
        ]);

        $mensaje=new Mensaje();
        $mensaje->titulo=$request->titulo;
        $mensaje->descripcion=$request->descripcion;
        $mensaje->categoria_id=$request->categoria;
        $mensaje->user_id=$request->user_id;
        $mensaje->save();
        session()->flash('notification', ['type' => 'success', 'title' => __("mensaje creado"), 'message' => __("El mensaje ha sido creado correctamente")]);
        return redirect()->route('mensajes.show',$mensaje);
    }


    public function show(Mensaje $mensaje){
        return view('mensajes.show',compact('mensaje'));
        //return "Aquí editaremos un mensaje";
    }

    public function edit(Mensaje $mensaje){
        $categorias = Categoria::all();
        return view('mensajes.edit',compact('mensaje','categorias'));
    }

    public function update(Request $request, Mensaje $mensaje){

         //Para verificar que los campos no son nulos;
        $request->validate([
            "titulo"=>'required',
            "descripcion"=>'required'
        ]);
        $mensaje->titulo=$request->titulo;
        $mensaje->descripcion=$request->descripcion;
        $mensaje->categoria_id=$request->categoria_id;
        $mensaje->user_id=$request->user_id;
        $mensaje->save();
        session()->flash('notification', ['type' => 'success', 'title' => __("mensaje actualizado"), 'message' => __("El mensaje ha sido actualizado correctamente")]);
        return redirect()->route('mensajes.show',$mensaje);
        

    }

    public function destroy(Mensaje $mensaje){
        $mensaje->delete();
        return redirect()->route('welcome');
    }
}

