<?php
namespace App\Http\Controllers;
use App\materia;
use Illuminate\Http\Request;

class materiasBuscadorController extends Controller
{
public function buscador(Request $request){
        $materias    =   materia::where("Nombre",'like',$request->claveId."%")->get();
         $materias2    =   materia::where("Clave",'like',$request->claveId."%")->get();
         if(count($materias)>0 and  count($materias2)>0){
         		return view('materias.busqueda' , compact('materias' ,'materias2'));

         }else if(count($materias)>0){
         	return view('materias.busqueda' , compact('materias')); 					

         }else if(count($materias2)>0){

         		return view('materias.busqueda' , compact('materias2')); 
         }
              
    }
}