<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nguoidung;
class userController extends Controller
{
    //
    public function showAdminUser(){
        $nguoidung='App\Nguoidung'::where('id', request()->session()->get('id'))->get();
       return view('admin.page.user.homeUser')->with('datanguoidung',$nguoidung);
    }
    public function showEditUser(){
        $nguoidung='App\Nguoidung'::where('id', request()->session()->get('id'))->get();
       return view('admin.page.user.editUser')->with('datanguoidung',$nguoidung);;
    }
    public function editUser(Request $request){
        $data=new Nguoidung();
        $data->id=$request->input('id');
        $datas='App\Nguoidung'::find($data->id);
        $data->hotenUser=$request->input('namelogin');
        if($data->hotenUser!='')$datas->hotenUser=$data->hotenUser;
        $data->passUser=$request->input('passlogin');
        if($data->passUser!='')$datas->passUser=$data->passUser;
        $data->emailUser=$request->input('email');
        if($data->emailUser!='')$datas->emailUser=$data->emailUser;
        $data->birthday=$request->input('birthday');
        if($data->birthday!='')$datas->birthday=$data->birthday;
        if($request->hasFile('anh'))
        {
    		$img_file = $request->file('anh');

    		$img_file_extension = $img_file->getClientOriginalExtension();
    		$img_file_name = $img_file->getClientOriginalName();
    		$random_file_name = str_random(4).'_'.$img_file_name;
    		while(file_exists('/public/img/admin/'.$random_file_name))
    		{
    			$random_file_name = str_random(4).'_'.$img_file_name;
    		}

    		$img_file->move('public/img/admin/',$random_file_name);
    		$data->anh = $random_file_name;
        }
        if($data->anh!='')$datas->anh=$data->anh;
        $datas->save();
        return redirect('useradmin');
     }

}