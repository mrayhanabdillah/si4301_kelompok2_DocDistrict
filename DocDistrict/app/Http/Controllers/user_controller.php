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
    // public function createSession()
    // {
    //     $data = users_model::where('id',Session::get('id'))->firstOrFail();
    //     if (session['login']){
    //         Session::put('user',['nama'=> $data->nama,'email'=>$data->email,'ttl'=>$data->ttl,'noHP'=>$data->noHP,'alamat'=>$data->alamat,'nik'=>$data->nik]);
    //         if (session['updated']){
    //             Session::push('nama', $data ->nama);
    //             Session::push('email', $data ->email);
    //             Session::push('ttl', $data ->ttl);
    //             Session::push('noHP', $data ->noHP);
    //             Session::push('alamat', $data ->alamat);
    //             Session::push('nik', $data ->nik);
    //         }
    //     }
    // }

    public function index(){
        
    }

    public function login(Request $request){
        $data = users_model::where('email',$request->email)->firstOrFail();
        if($request->password == $data->password){
            session(['login' => true]);
            session(['id' => $data -> id]);
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
        $users = users_model::find($id);
        return view('user.profile', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = users_model::where('id',$id)->firstOrFail();
        return view('user.profile',compact('users'));
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
                // Session::flush();
                // session(['login' => true]);
                // Session::put('user',['nama'=> $request->nama,'id'=>$data->id,'email'=>$request->email,'ttl'=>$request->ttl,'noHP'=>$request->noHP,'alamat'=>$request->alamat,'nik'=>$request->nik]);
                // // Session::forget(['nama','email','ttl','noHP','alamat','nik']);
                // // Session::put('nama', $data ->nama);
                // // Session::put('email', $data ->email);
                // // Session::put('ttl', $data ->ttl);
                // // Session::put('noHP', $data ->noHP);
                // // Session::put('alamat', $data ->alamat);
                // // Session::put('nik', $data ->nik);

                
                return redirect("/");
            }
            return redirect("/user/{{ Session::get('user')['id'] }}/edit")->with('passsalah1','Gagal Update! Password anda salah!');
        }
        return redirect("/user/{{ Session::get('user')['id'] }}/edit")->with('passsalah2','Gagal Update! Password dan Password Confirm anda tidak sama!');
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
