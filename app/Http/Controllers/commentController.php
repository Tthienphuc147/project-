<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Comment;

class CommentController extends Controller
{
    //

    public function getDanhSach(){
    	$comment = Comment::all();
    	return view('admin.comment.danhsach',['comment'=>$comment]);
    }

    public function Xoa($id){
    	$comment = Comment::find($id);
    	$comment->delete();
    	return redirect('admin/tintuc/sua/'.$comment->TinTuc->id)->with('message','Xóa Bình Luận Thành Công!');
    }

    public function Them($id,Request $request){
        if (request()->session()->has('id'))
        {
            
        $idpost=$id;
        $post = 'App\Post'::find($id);
        $comment = new Comment;
        $comment->idUser = request()->session()->get('id');
        $datauser='App\Nguoidung'::find(request()->session()->get('id'));
        $comment->user_name= $datauser['hotenUser'];
        $comment->anh= $datauser['anh'];
        $comment->idPost = $idpost;
        $comment->NoiDung = $request->content;  
        $comment->save();
        return redirect("/quanan/{$id}");
        }
        else{
            return redirect("/showlogin");
        }
        
    }
}