<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\mydocs_model;
use App\Models\users_model;

class mydoc_controller extends Controller
{
    public function store(Request $request)
    {
        mydocs_model::create([
            'id_doc' => $request ->id_doc,
            'id_user' => session('id'),
            'status' => "Belum Siap"
        ]);

        return redirect('/')->with('BerhasiladdDoc','Berhasil Registrasi!');
    }

    public function showmyDoc(){
        $id_user = session('id');
        $user = users_model::where('id',$id_user)->firstOrFail();
        $mydocs = mydocs_model::where('id_user',$id_user)->get();
        return view('doc.mydoc',compact('mydocs','user'));
    }
}
