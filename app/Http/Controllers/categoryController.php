<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoryController extends Controller
{
    //
    public function Baiviet($unsigned_name){
        $baiviet='App\Post'::where ('danhmuc_id',$unsigned_name)->paginate(6);
        $danhmuc='App\Danhmuc'::where ('id',$baiviet[0]['danhmuc_id'])->get();
        return view('page.list')->with('databaiviet',$baiviet)->with('datadanhmuc',$danhmuc);
    }
    public function Baiviet1($unsigned_name){
        $baiviet='App\Post'::where ('danhmuc_id',$unsigned_name)->paginate(6);
        $danhmuc='App\Danhmuc'::where ('id',$baiviet[0]['danhmuc_id'])->get();
        return view('page.list1')->with('databaiviet',$baiviet)->with('datadanhmuc',$danhmuc);
    }
    public function Blog(){
        $blog='App\Blog'::paginate(6);
        return view('page.listblog')->with('datablog',$blog);
    }
}