<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;
class categoriacontroller extends Controller
{
    //primer servicio get 
    public function getCategoria(){
        return response()->json(categoria::all(),200);
    }

    public function getCategoriaId($id){
        $categoria = categoria::find($id);
        
        if(is_null($categoria)){
            return response()->json(['mensaje'=>'Registro no encontrado'],404);
        }
        return response()->json(categoria::find($id),200);
    }

    public function insertCategoria(Request $request){
        $categoria = categoria::create($request->all());
        return response($categoria,200);
    } 

    public function updateCategoria(Request $request,$id){
        $categoria = categoria::find($id);
        if(is_null($categoria)){
            return response()->json(['mensaje'=>'Registro no encontrado'],404);
        }
        $categoria->update($request->all());
        return response()->json($categoria,200);
    }
//no se deberia hacer un eliminado fisico
    public function deleteCategoria($id){
        $categoria = categoria::find($id);
         if(is_null($categoria)){
        return response()->json(['mensaje'=>'Registro no encontrado'],404);
         }
         $categoria->delete();
         return response()->json(['mensaje'=>'Registro eliminado'],200);
    }

}
