<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users_model;
use Illuminate\Support\Facades\Hash;

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
            session(['berhasil' => true]);
            session(['nama' => $data -> nama]);
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

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
