<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BioController extends Controller
{
    public function index(Request $request){
        $hello = "Hello WOrld ".$request->nama ;
        return $hello; 
    }
    public function show(Request $request, $nik){
        $result = "Nama anda ".$request->nama. " dengan nik ". $nik;
        return $result; 
    }
}
