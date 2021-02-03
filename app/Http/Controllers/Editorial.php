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
}
