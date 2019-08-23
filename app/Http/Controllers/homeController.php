<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    public function showhome(){
        $slide='App\Slide':: get();
        $postanuong='App\Post':: where('danhmuc_id','1')->limit(4)-> get();      
        $noibat='App\Post':: where('noibat',1)->limit(4)-> get();
        $danhmucanuong=$postanuong[0]['danhmuc_id'];
        $postdulich='App\Post':: where('danhmuc_id','2')->limit(4)-> get();
        $danhmucdulich=$postdulich[0]['danhmuc_id'];
        $postgiaitri='App\Post':: where('danhmuc_id','3')-> limit(4)->get();
        $danhmucgiaitri=$postgiaitri[0]['danhmuc_id'];
        $blog='App\Blog'::limit(4)->get();
        return view('page.home')->with('dataslide',$slide)->with('datapostanuong',$postanuong)->with('datapostdulich',$postdulich)->with('datapostgiaitri',$postgiaitri)->with('datablog',$blog)
        ->with('danhmucanuong',$danhmucanuong)->with('danhmucdulich',$danhmucdulich)->with('danhmucgiaitri',$danhmucgiaitri)->with('datanoibat',$noibat);
    }
    public function showContact(){
      
        return view('page.contact');
    }
    

}