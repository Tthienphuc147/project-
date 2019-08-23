<?php

namespace App\Http\Controllers;

use App\Post;
use App\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function Baiviet($unsigned_name){
        $baiviet='App\Post'::where ('tieudekhongdau',$unsigned_name)->get();
        $danhmuc=$baiviet[0]['danhmuc_id'];
        $baivietlq='App\Post'::where('danhmuc_id',$danhmuc)->limit(4)->inRandomOrder()->get();
        // $likePost='App\Post'::find($unsigned_name);
        // $likeCtr='App\Like'::where(['post_id'=>$likePost->id])->count();
        
        $comment='App\Comment'::where ('idPost',$unsigned_name)->get();
        $productKey = 'quanan_' . $unsigned_name;
        // Kiểm tra Session của sản phẩm có tồn tại hay không.
        // Nếu không tồn tại, sẽ tự động tăng trường view_count lên 1 đồng thời tạo session lưu trữ key sản phẩm.
        if (!Session::has($productKey)) {
            Post::where('tieudekhongdau', $unsigned_name)->increment('soluotxem');
            Session::put($productKey, 1);
        }

        return view('page.detail1')->with('databaiviet',$baiviet)->with('datalq',$baivietlq)->with('datacomment',$comment);
    }
    public function Baiviet1($unsigned_name){
        $baiviet='App\Post'::where ('tieudekhongdau',$unsigned_name)->get();
        $danhmuc=$baiviet[0]['danhmuc_id'];
        $baivietlq='App\Post'::where('danhmuc_id',$danhmuc)->limit(4)->inRandomOrder()->get();
        // $likePost='App\Post'::find($unsigned_name);
        // $likeCtr='App\Like'::where(['post_id'=>$likePost->id])->count();

        return view('page.detail')->with('databaiviet',$baiviet)->with('datalq',$baivietlq);
    }
    // public function Like($id){

    //     if( request()->session()->has('id'))
    //     {
    //     $like_user='App\Like'::where(['user_id'=> request()->session()->get('id'),'post_id'=>$id])->first();
    //     if(empty($like_user->user_id)){
    //         $post_id=$id;
    //         $like=new Like();
    //         $like->user_id= request()->session()->get('id');
    //         $like->user_name= request()->session()->get('hotenUser');
    //         $like->email=request()->session()->get('emailUser');
    //         $like->post_id=$post_id;
    //         $like->save();
    //         return redirect("Bai-viet/{$id}");

    //     }
    //     else{
    //         return redirect("Bai-viet/{$id}");
    //     }
    //      }
    //      else{
    //         return redirect("showlogin");
    //      }
     
    // }


}