<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users_model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class user_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function login(Request $request){
        $data = users_model::where('email',$request->email)->firstOrFail();
        if($request->password == $data->password){
            session(['login' => true]);
            session(['nama' => $data -> nama]);
            session(['id' => $data -> id]);
            session(['email' => $data -> email]);
            session(['ttl' => $data -> ttl]);
            session(['noHP' => $data -> noHP]);
            session(['alamat' => $data -> alamat]);
            session(['nik' => $data -> nik]);
            return redirect('/')->with('berhasil_login','Berhasil Login!');
        }else{
            return redirect('/')->with('gagal','Email atau Password salah!');
        }
    }


    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/')->with('logout','Anda telah melakukan logout!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = users_model::find($id);
        return view('user.profile', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('user.profile');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = users_model::where('email',$request->email)->firstOrFail();
        if($request->pass == $request->passcon){
            if ($request->pass == $data->password){
                users_model::find($id)->update([
                    'nama' => $request ->nama,
                    'email' => $request ->email,
                    'noHP' => $request ->noHP,
                    'ttl' => $request ->ttl,
                    'alamat' => $request ->alamat,
                    'nik' => $request ->nik
        
                ]);
                
                return redirect("/");
            }
            return redirect("/user/{{ session('id') }}/edit")->with('passsalah1','Gagal Update! Password anda salah!');
        }
        return redirect("/user/{{ session('id') }}/edit")->with('passsalah2','Gagal Update! Password dan Password Confirm anda tidak sama!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
