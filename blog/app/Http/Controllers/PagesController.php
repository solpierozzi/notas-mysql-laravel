<?php

namespace App\Http\Controllers;
use App;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function inicio(){
        $notas = App\Nota::all();
        $notas = App\Nota::paginate(2);
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

    public function editar($id){
        $nota = App\Nota::findOrFail($id);
        return view('notas.editar',compact('nota'));
    }

    
    public function eliminar($id){
        $notaAEliminar = App\Nota::findOrFail($id);
        $notaAEliminar->delete();
        return back()->with('mensaje','Nota eliminada');
    }
    
    public function update(Request $request, $id){
        $request->validate([
            'name'=>'required',
             'description'=>'required'
        ]);
 
        $notaUpdate = App\Nota::findOrFail($id);
        $notaUpdate->name = $request->name;
        $notaUpdate->description = $request->description;

        $notaUpdate-> save();
        return back()->with('mensaje','Nota actualizada');

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
