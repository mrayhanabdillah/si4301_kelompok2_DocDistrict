<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin_model;

class admin_controller extends Controller
{
    public function index(){
        if (session('loginAdmin')){
            return view('admin.index');
        }else{
            return view('admin.loginadmin');
        }
        
    }

    public function loginAdmin(Request $request)
    {
        $data = admin_model::where('email',$request->email)->firstOrFail();
        if (admin_model::where('email',$request->email)->exists()){
            if($request->pass == $data->password){
                session(['loginAdmin' => true]);
                session(['id_admin' => $data -> id]);
                return redirect('/index-admin')->with('berhasil_login','Berhasil Login!');
            }else{
                return redirect('/login-admin')->with('gagal','Email atau Password salah!');
            }
        }else{
            return redirect('/login-admin')->with('tidak_terdaftar','Email anda belum terdaftar');
        }
    }

    public function logout(Request $request){
        $request->session()->forget('loginAdmin');
        $request->session()->forget('id_admin');
        return redirect('/admin')->with('logout','Anda telah melakukan logout!');
    }
}
