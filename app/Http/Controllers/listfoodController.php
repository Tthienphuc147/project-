<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listfoodController extends Controller
{
    //
    public function Baiviet($unsigned_name){
        $baiviet='App\Post'::where ('baiviet_id',$unsigned_name)->get();
        return view('page.detail')->with('databaiviet',$baiviet)->with('datalq',$baivietlq);
    }
}