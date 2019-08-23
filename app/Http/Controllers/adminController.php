<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Danhmuc;
use App\Danhmucanh;
use App\Post;
use App\Blog;
use App\Danhmucblog;
use App\Slide;
class adminController extends Controller
{
    //
    public function showAdmin(){
       return view('admin.page.admin.homeAdmin');
    }
    /*quanlydanhmuc*/
    public function danhSachDanhMuc(){
        $danhmuc='App\Danhmuc'::get();
        return view('admin.page.admin.danhmuc.danhsach')->with('datadanhmuc',$danhmuc);
    }
     public function deleteDanhMuc($id,Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            'App\Danhmuc'::find($id)->delete();
            return redirect('/admin-danhmuc-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }

    }
    public function showThemDanhMuc(Request $request){
            if( $request->session()->has('id') && $request->session()->get('role')=='admin')
            {
                return view('admin.page.admin.danhmuc.them');
            }
            else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
            else{
                return view('page.login');
            }

    }
     public function insertDanhMuc(Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data=new Danhmuc();
            if($request->input('id')!="")$data->id=$request->input('id');
            if($request->input('namecate')!="")$data->tenloai=$request->input('namecate');
            if($request->input('namecate1')!="")$data->tenkhongdau=$request->input('namecate1');
            $data->save();
            return redirect('/admin-danhmuc-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }


    }
    public function showUpdateDanhMuc($id,Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data='App\Danhmuc'::where('id',$id)->get();
            return view('admin.page.admin.danhmuc.sua')->with('datadanhmuc',$data);
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }

    }
    public function updateDanhMuc(Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data=new Danhmuc();
            $data->id=$request->input('id');
            $datas='App\Danhmuc'::find($data->id);
            if($data->id!='')$datas->id=$data->id;
            $data->tenloai=$request->input('namecate');
            if($data->tenloai!="")$datas->tenloai=$data->tenloai;
            $data->tenkhongdau=$request->input('namecate1');
            if($data->tenkhongdau!="")$datas->tenkhongdau=$data->tenkhongdau;
            $datas->save();

            return redirect('/admin-danhmuc-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }


    }

    /*quanlydanhmuc*/

    /*quanlybaiviet*/
    public function danhSachBaiViet(){
        $data='App\Post'::get();
        return view('admin.page.admin.baiviet.danhsach')->with('databaiviet',$data);
    }
     public function showUpdateBaiViet($id,Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data='App\Post'::where('id',$id)->get();
            return view('admin.page.admin.baiviet.sua')->with('databaiviet',$data);
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }

    }
    public function updateBaiViet(Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data=new Post();
            $data->id=$request->input('id');
            $datas='App\Post'::find($data->id);
            if($data->id!='')$datas->id=$data->id;
            $data->tieude=$request->input('namepost');
            if($data->tieude!="")$datas->tieude=$data->tieude;
            $data->tieudekhongdau=$request->input('namepost1');
            if($data->tieudekhongdau!="")$datas->tieudekhongdau=$data->tieudekhongdau;
            $data->diachi=$request->input('address');
            if($data->diachi!="")$datas->diachi=$data->diachi;
            $data->thoigianmocua=$request->input('timeopen');
            if($data->thoigianmocua!="")$datas->thoigianmocua=$data->thoigianmocua;
            $data->gia=$request->input('price');
            if($data->gia!="")$datas->gia=$data->gia;
            $data->map=$request->input('map');
            if($data->map!="")$datas->map=$data->map;
            $data->noidung=$request->input('detailpost');
            if($data->noidung!="")$datas->noidung=$data->noidung;
            if($request->hasFile('anh'))
            {
                $img_file = $request->file('anh');

                $img_file_extension = $img_file->getClientOriginalExtension();
                $img_file_name = $img_file->getClientOriginalName();
                $random_file_name = str_random(4).'_'.$img_file_name;
                while(file_exists('/public/img/upload/'.$random_file_name))
                {
                    $random_file_name = str_random(4).'_'.$img_file_name;
                }

                $img_file->move('public/img/upload/',$random_file_name);
                $data->anhgioithieu = $random_file_name;
            }
            if($data->anhgioithieu!='')$datas->anhgioithieu=$data->anhgioithieu;
            $datas->save();

            return redirect('/admin-baiviet-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }


    }
    public function showThemBaiviet(Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            return view('admin.page.admin.baiviet.them');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }

    }
    public function insertBaiviet(Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data=new Post();
            if($request->input('namepost')!="")$data->tieude=$request->input('namepost');

            if($request->input('namepost1')!="")$data->tieudekhongdau=$request->input('namepost1');
        
            if($request->input('namecate')!="")$data->danhmuc_id=$request->input('namecate');
   
            if($request->input('address')!="")$data->diachi=$request->input('address');
        
            if($request->input('timeopen')!="")$data->thoigianmocua=$request->input('timeopen');
          
            if($request->input('price')!="")$data->gia=$request->input('price');
         
            if($request->input('map')!="")$data->map=$request->input('map');
        
            if($request->input('detailpost')!="")$data->noidung=$request->input('detailpost');
          
            if($request->hasFile('anh'))
            {
                $img_file = $request->file('anh');

                $img_file_extension = $img_file->getClientOriginalExtension();
                $img_file_name = $img_file->getClientOriginalName();
                $random_file_name = str_random(4).'_'.$img_file_name;
                while(file_exists('/public/img/upload/'.$random_file_name))
                {
                    $random_file_name = str_random(4).'_'.$img_file_name;
                }

                $img_file->move('public/img/upload/',$random_file_name);
                $data->anhgioithieu = $random_file_name;
            }
            $data->save();
            return redirect('/admin-baiviet-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }


    }
    public function deleteBaiviet($id,Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            'App\Post'::find($id)->delete();
            return redirect('/admin-baiviet-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }

    }

    /*quanlybaiviet*/

    /*quanlyblog*/
    public function danhSachBlog(){
        $data='App\Blog'::get();
        return view('admin.page.admin.blog.danhsach')->with('datablog',$data);
    }
    public function showThemBlog(Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            return view('admin.page.admin.blog.them');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }

    }
    public function insertBlog(Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data=new Blog();
            if($request->input('nameblog')!="")$data->tieudeblog=$request->input('nameblog');

            if($request->input('nameblog1')!="")$data->tieudekhongdau=$request->input('nameblog1');
       
            if($request->input('namecate')!="")$data->nhomblog_id=$request->input('namecate');
       
            if($request->input('des')!="")$data->mota=$request->input('des');
            
            if($request->input('detailblog')!="")$data->noidung=$request->input('detailblog');
      
            if($request->hasFile('anh'))
            {
                $img_file = $request->file('anh');

                $img_file_extension = $img_file->getClientOriginalExtension();
                $img_file_name = $img_file->getClientOriginalName();
                $random_file_name = str_random(4).'_'.$img_file_name;
                while(file_exists('/public/img/upload/'.$random_file_name))
                {
                    $random_file_name = str_random(4).'_'.$img_file_name;
                }

                $img_file->move('public/img/upload/',$random_file_name);
                $data->anhmota = $random_file_name;
            }
            $data->save();
            return redirect('/admin-blog-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }


    }
    public function deleteBlog($id,Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            'App\Blog'::find($id)->delete();
            return redirect('/admin-blog-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }

    }
    public function showUpdateBlog($id,Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data='App\Blog'::where('id',$id)->get();
            return view('admin.page.admin.blog.sua')->with('datablog',$data);
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }

    }
    public function updateBlog(Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data=new Blog();
            $data->id=$request->input('id');
            $datas='App\Blog'::find($data->id);
            if($data->id!='')$datas->id=$data->id;
            $data->tieudeblog=$request->input('nameblog');
            if($data->tieudeblog!="")$datas->tieudeblog=$data->tieudeblog;
            $data->tieudekhongdau=$request->input('nameblog1');
            if($data->tieudekhongdau!="")$datas->tieudekhongdau=$data->tieudekhongdau;
            $data->mota=$request->input('des');
            if($data->mota!="")$datas->mota=$data->mota;
            $data->nhomblog_id=$request->input('namecate');
            if($data->nhomblog_id!="")$datas->nhomblog_id=$data->nhomblog_id;
            $data->noidung=$request->input('detailblog');
            if($data->noidung!="")$datas->noidung=$data->noidung;
            if($request->hasFile('anh'))
            {
                $img_file = $request->file('anh');

                $img_file_extension = $img_file->getClientOriginalExtension();
                $img_file_name = $img_file->getClientOriginalName();
                $random_file_name = str_random(4).'_'.$img_file_name;
                while(file_exists('/public/img/upload/'.$random_file_name))
                {
                    $random_file_name = str_random(4).'_'.$img_file_name;
                }

                $img_file->move('public/img/upload/',$random_file_name);
                $data->anhmota = $random_file_name;
            }
            if($data->anhmota!='')$datas->anhmota=$data->anhmota;
            $datas->save();

            return redirect('/admin-blog-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }


    }

    /*quanlyblog*/


    /*quanlydanhmucblog*/
    public function danhSachDanhMucBLog(){
        $danhmuc='App\Danhmucblog'::get();
        return view('admin.page.admin.danhmucblog.danhsach')->with('datadanhmucblog',$danhmuc);
    }
     public function deleteDanhMucBLog($id,Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            'App\Danhmucblog'::find($id)->delete();
            return redirect('/admin-danhmucblog-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }

    }
    public function showThemDanhMucBlog(Request $request){
            if( $request->session()->has('id') && $request->session()->get('role')=='admin')
            {
                return view('admin.page.admin.danhmucblog.them');
            }
            else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
            else{
                return view('page.login');
            }

    }
     public function insertDanhMucBlog(Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data=new Danhmucblog();
            if($request->input('id')!="")$data->id=$request->input('id');
           
            if($request->input('namecate')!="")$data->tenloaiblog=$request->input('namecate');

            if($request->input('namecate1')!="")$data->tenkhongdau=$request->input('namecate1');
          
            $data->save();
            return redirect('/admin-danhmucblog-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }


    }
    public function showUpdateDanhMucBlog($id,Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data='App\Danhmucblog'::where('id',$id)->get();
            return view('admin.page.admin.danhmucblog.sua')->with('datadanhmucblog',$data);
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }

    }
    public function updateDanhMucBlog(Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data=new Danhmucblog();
            $data->id=$request->input('id');
            $datas='App\Danhmucblog'::find($data->id);
            if($data->id!='')$datas->id=$data->id;
            $data->tenloaiblog=$request->input('namecate');
            if($data->tenloaiblog!="")$datas->tenloai=$data->tenloai;
            $data->tenkhongdau=$request->input('namecate1');
            if($data->tenkhongdau!="")$datas->tenkhongdau=$data->tenkhongdau;
            $datas->save();

            return redirect('/admin-danhmucblog-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }


    }

    /*quanlydanhmucblog*/

     /*quanlyslide*/
     public function danhSachSlide(){
        $slide='App\Slide'::get();
        return view('admin.page.admin.slide.danhsach')->with('dataslide',$slide);
    }
    public function deleteSlide($id,Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            'App\Slide'::find($id)->delete();
            return redirect('/admin-slide-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }

    }
    public function showThemSlide(Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            return view('admin.page.admin.slide.them');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }

    }
    public function insertSlide(Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data=new Slide();
            if($request->input('tenslide')!="")$data->tenslide=$request->input('tenslide');
            else $data->tenslide="chưa nhập";
            if($request->input('mota')!="")$data->mota=$request->input('mota');
            else $data->mota="chưa nhập";
            if($request->hasFile('anh'))
            {
                $img_file = $request->file('anh');

                $img_file_extension = $img_file->getClientOriginalExtension();
                $img_file_name = $img_file->getClientOriginalName();
                $random_file_name = str_random(4).'_'.$img_file_name;
                while(file_exists('/public/img/slide-img/'.$random_file_name))
                {
                    $random_file_name = str_random(4).'_'.$img_file_name;
                }

                $img_file->move('public/img/slide-img/',$random_file_name);
                $data->anh = $random_file_name;
            }
            $data->save();
            return redirect('/admin-slide-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }


    }
    public function showUpdateSlide($id,Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data='App\Slide'::where('id',$id)->get();
            return view('admin.page.admin.slide.sua')->with('dataslide',$data);
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }

    }
    public function updateSlide(Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data=new Danhmucblog();
            $data->id=$request->input('id');
            $datas='App\Slide'::find($data->id);
            if($data->id!='')$datas->id=$data->id;
            $data->tenslide=$request->input('tenslide');
            if($data->tenslide!="")$datas->tenslide=$data->tenslide;
            $data->mota=$request->input('mota');
            if($data->mota!="")$datas->mota=$data->mota;
            if($request->hasFile('anh'))
            {
                $img_file = $request->file('anh');

                $img_file_extension = $img_file->getClientOriginalExtension();
                $img_file_name = $img_file->getClientOriginalName();
                $random_file_name = str_random(4).'_'.$img_file_name;
                while(file_exists('/public/img/slide-img/'.$random_file_name))
                {
                    $random_file_name = str_random(4).'_'.$img_file_name;
                }

                $img_file->move('public/img/slide-img/',$random_file_name);
                $data->anh = $random_file_name;
            }
            if($data->anh!='')$datas->anh=$data->anh;
            $datas->save();

            return redirect('/admin-slide-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }


    }
      /*quanlyslide*/


       /*quanlydanhmucanh*/
       public function danhSachDanhMucAnh(){
        $danhmuc='App\Danhmucanh'::get();
        return view('admin.page.admin.danhmucanh.danhsach')->with('datadanhmuc',$danhmuc);
    }
     public function deleteDanhMucAnh($id,Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            'App\Danhmucanh'::find($id)->delete();
            return redirect('/admin-danhmucanh-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }

    }
    public function showThemDanhMucAnh(Request $request){
            if( $request->session()->has('id') && $request->session()->get('role')=='admin')
            {
                return view('admin.page.admin.danhmucanh.them');
            }
            else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
            else{
                return view('page.login');
            }

    }
     public function insertDanhMucAnh(Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data=new Danhmucanh();
    
            if($request->input('namecate')!="")$data->tenloai=$request->input('namecate');
            else $data->tenloai="chưa nhập";
            $data->save();
            return redirect('/admin-danhmucanh-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }


    }
    public function showUpdateDanhMucAnh($id,Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data='App\Danhmucanh'::where('id',$id)->get();
            return view('admin.page.admin.danhmucanh.sua')->with('datadanhmucanh',$data);
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }

    }
    public function updateDanhMucAnh(Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data=new Danhmuc();
            $data->id=$request->input('id');
            $datas='App\Danhmucanh'::find($data->id);
            if($data->id!='')$datas->id=$data->id;
            $data->tenloai=$request->input('namecate');
            if($data->tenloai!="")$datas->tenloai=$data->tenloai;
            $datas->save();

            return redirect('/admin-danhmucanh-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }


    }




       /*quanlydanhmucanh*/






}