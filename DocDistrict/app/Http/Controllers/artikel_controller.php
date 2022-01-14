<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\artikel_model;
use App\Models\admin_model;
use App\Models\users_model;

class artikel_controller extends Controller
{
    public function index(){
        $admin = admin_model::where('id_admin',session('id_admin'))->firstOrFail();
        $artikel = artikel_model::first();
        $artikels = artikel_model::orderBy('id_artikel','asc')->get();
        return view('admin.artikel',compact('artikels','admin','artikel'));
    }

    public function addArtikel(Request $request){
        artikel_model::create([
            'id_admin' => session('id_admin'),
            'judul_artikel' => $request -> judul,
            'desc_artikel' => $request -> desk,
            'author_artikel' => $request->nama

        ]);

        return redirect('/artikel');
    }

    public function updateArtikel(Request $request,$id){
        artikel_model::find($id)->update([
            'id_admin' => session('id_admin'),
            'judul_artikel' => $request -> judul,
            'desc_artikel' => $request -> desk,
            'author_artikel' => $request->nama

        ]);
        return redirect('/artikel');
    }

    public function delArtikel($id){
        artikel_model::find($id)->delete();
        return redirect('/artikel');
    }

    public function detail($id){
        $id_user = session('id');
        $user = users_model::where('id',$id_user)->firstOrFail();
        $artikel = artikel_model::first();
        return view('viewArtikel',compact('user','artikel'));
    }

    public function show($id){
        $admin = admin_model::where('id_admin',session('id_admin'))->firstOrFail();
        $artikel = artikel_model::find($id);
        return view('admin.updateArtikel',compact('artikel','admin'));
    }


}
