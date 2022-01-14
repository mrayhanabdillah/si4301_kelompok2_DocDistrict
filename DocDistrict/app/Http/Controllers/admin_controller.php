<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin_model;
use App\Models\mydocs_model;

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
                session(['id_admin' => $data -> id_admin]);
                return redirect('/index-admin')->with('berhasil_login','Berhasil Login!');
            }else{
                return redirect('/login-admin')->with('gagal','Email atau Password salah!');
            }
        }else{
            return redirect('/login-admin')->with('tidak_terdaftar','Email anda belum terdaftar');
        }
    }

    public function docWarga(){
        $docs = mydocs_model::orderby('id_mydoc','asc')->get();
        return view('admin.docWarga',compact('docs'));
    }

    public function terima($id){
        mydocs_model::find($id)->update([
            'status'=> "Siap"
        ]);
        return redirect('/DocWarga');
    }

    public function tolak($id){
        mydocs_model::find($id)->update([
            'status'=> "Di Tolak"
        ]);
        return redirect('/DocWarga');
    }

    public function logout(Request $request){
        $request->session()->forget('loginAdmin');
        $request->session()->forget('id_admin');
        return redirect('/admin')->with('logout','Anda telah melakukan logout!');
    }
}
