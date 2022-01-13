<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mydocs_model;

class mydoc_controller extends Controller
{
    public function store(Request $request)
    {
        mydocs_model::create([
            'id_doc' => $request ->id_doc,
            'id_user' -> session('id'),
            'status' => "Belum Siap"
        ]);

        return redirect('/')->with('BerhasiladdDoc','Berhasil Registrasi!');
    }
}
