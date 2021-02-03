<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Editoriales;
class Editorial extends Controller
{
    
    public function index(){
        $editorial=DB::table('editorial')
        ->get();
        return view('editorial.editorial', ['editorial'=>$editorial]);
    }
    public function registro(){
        return view('editorial.formeditorial');
    }
    public function formulario(){

        return view('editorial.formeditorial');
    }

        public function registros(Request $request)
    {
        
        $category = new Editoriales();
        $category->nombre = $request->input('nombre');
        $category->direccion = $request->input('direccion');
        $category->ciudad = $request->input('ciudad');
        $category->telefono = $request->input('telefono');
       
        $category->save();
        return redirect()->route('listado_editorial');
    }
    public function actualiza($id){
        $act=Editoriales::findOrFail($id);
        return view('editorial.actualiza_editor',compact('act'));
   }
   public function actualiza_formulario(Request $request, $id){
    $category = Editoriales::findOrfail($id);
  
         $category->nombre = $request->input('nombre');
         $category->direccion = $request->input('direccion');
         $category->ciudad = $request->input('ciudad');
         $category->telefono = $request->input('telefono');
         $category->save();
         return redirect()->route('listado_editorial');
}
   
    

}
