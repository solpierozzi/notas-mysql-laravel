<?php

namespace App\Http\Controllers;
use App;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function inicio(){
        $notas = App\Nota::all();
        return view('welcome',compact('notas'));
    }
    
    public function crear(Request $request){
       //Todo: return $request->all();
        $request->validate([
           'name'=>'required',
            'description'=>'required'
       ]);

       $notaNueva = new App\Nota;
       $notaNueva->name = $request->name;
       $notaNueva->description = $request->description;
       
       $notaNueva->save();
       return back()->with('mensaje','Nota agregada satisfactoriamente!'); 
    }

    public function detalle($id){
        //find tira error si el id no existe, findorfail=>404
        $nota = App\Nota::findOrFail($id);
        return view('notas.detalle',compact('nota'));
    }
    
    public function fotos(){
        return view('fotos');
    }
    
    public function blog(){
        return view('blog');
    }

    public function nosotros($nombre=null){
        $equipo = ['Ignacio','Juanito','Pedrito'];
        return view('nosotros',compact('equipo','nombre'));
    }



}
