<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Libros extends Controller
{
    public function index(){
        $libros=DB::table('libro')
        ->join('editorial', 'libro.editorial', '=','editorial.id')
        ->get();
        return view('libros.libros', ['libros'=>$libros]);
    }
 
}
