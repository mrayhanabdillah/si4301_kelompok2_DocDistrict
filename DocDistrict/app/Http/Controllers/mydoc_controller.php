<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mydoc_controller extends Controller
{
    public function store(Request $request)
    {
        users_model::create([
            'nama' => $request ->nama,
            'email' => $request ->email,
            'password' => $request ->pass,
            'noHP' => $request ->noHP
        ]);

        return redirect('/')->with('berhasil_regis','Berhasil Registrasi!');
    }
}
