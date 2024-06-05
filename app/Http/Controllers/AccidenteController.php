<?php

namespace App\Http\Controllers;
use App\Models\accidente;
use Illuminate\Http\Request;

class AccidenteController extends Controller
{
    public function edit(accidente $accidente){//Encuentro el Curso
       
        return view('edit',compact('accidente'));
 
      }
      public function update(Request $request, accidente $accidentado){
           
        $accidentado->codigo = $request->codigo;
        $accidentado->hora = $request->hora;
        $accidentado->fecha = $request->fecha;
        $accidentado->lugar = $request->lugar;
        $accidentado->save();
     
        return redirect()->route('accidente.index');
     
      }
       //Destroy
     public function destroy (accidente $accidente){
           
        $accidente->delete();
        return redirect()->route('accidente.index');
    }
    public function show(accidente $accidentado){

        return view('show',compact('accidentado'));


    }

   
    
    
    public function index(){

        $accidentado = accidente::orderBy('id', 'desc')->get();
        return view('listar', compact('accidentado'));
                            
    }

    public function create(){
        return view('create');
    }
    public function store(Request $request){
       
        $accidentado= new accidente();
        $accidentado->codigo=$request->codigo;
        $accidentado->hora=$request->hora;
        $accidentado->fecha=$request->fecha;
        $accidentado->lugar=$request->lugar;
         $accidentado->save();
         return $accidentado;
}
    }