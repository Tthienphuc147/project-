<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    //
    public function showLogin(){
      return view('page.login');
    }
    public function LoginAuth(Request $request){
        $email = $request->input('email');
        $pass=$request->input('passlogin');
        $data='App\Nguoidung'::where('emailUser',$email)->get();
        $this->validate($request,
            [
                'email' => 'required',
                'passlogin' => 'required|min:1|max:32'
            ],
            [
                'email.required' => 'Bạn chưa nhập Địa chỉ Email!',
                'passlogin.required' => 'Bạn chưa nhập Mật khẩu!',
                'passlogin.min' => 'Mật Khẩu gồm tối thiểu 6 ký tự!',
                'passlogin.max' => 'Mật Khẩu gồm tối đa 32 ký tự!'
            ]);
                $success=false;
            foreach($data as $account) {
                if($pass == $account['passUser'] && $account['role']=="admin"){
                    $request->session()->put('login', true);
                    $request->session()->put('id', $account['id']);
                    $request->session()->put('hotenUser', $account['hotenUser']);
                    $request->session()->put('emailUser', $account['emailUser']);
                    $request->session()->put('anhdaidien', $account['anh']);
                    $request->session()->put('role', $account['role']);
                    return redirect('/');
                    $success=true;
                    break;

                }
                else if($pass == $account['passUser'] && $account['role']=="user"){
                    $request->session()->put('login', true);
                    $request->session()->put('id', $account['id']);
                    $request->session()->put('hotenUser', $account['hotenUser']);
                    $request->session()->put('emailUser', $account['emailUser']);
                    $request->session()->put('anhdaidien', $account['anh']);
                    $request->session()->put('role', $account['role']);
                    return redirect('/');
                    $success=true;
                    break;
                }

            }
            if($success===false){
                return redirect('/showlogin');
            }

    }
    public function checklogin(Request $request){

        if( $request->session()->has('id')) {
            return redirect('/')->with('datas',$request->session());
        }
        else return view('page.login');
    }
    public function Logout(Request $request){
        $request->session()->flush();
        return redirect('/');

    }


}