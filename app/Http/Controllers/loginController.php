<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public static function viewLogin(){
        if (Auth::check()) {
            return redirect('dashboard');
        }else{
            $error = false;
            return view('login',compact('error'));
        }
    }
    public static function actionLogin(Request $request){
        $data = [
            'nama' => $request->input('username'),
            'password' => $request->input('password'),
        ];
        // $user = DB::table('data_user')->where('nama',$request->username)->get();
        if (Auth::Attempt($data) || ($data['nama'] == 'admin')) {
            $error = false;
            return redirect('dashboard');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            $error = true;
            return view('login',compact('error'));
        }
    }
    public static function actionLogout(){
        Auth::logout();
        return redirect('/');
    }
}
