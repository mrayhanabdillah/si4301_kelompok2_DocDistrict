<?php

use Illuminate\Support\Facades\Route;
use App\Models\users_model;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if (session('login')){
        $id = session('id');
        $user = users_model::where('id',$id)->firstOrFail();
        return view('home',compact('user'));
    }else{
        return view('home');
    }
});
Route::get('/about', function () {
    if (session('login')){
        $id = session('id');
        $user = users_model::where('id',$id)->firstOrFail();
        return view('about',compact('user'));
    }else{
        return view('about');
    }
});
Route::get('/contact', function () {
    if (session('login')){
        $id = session('id');
        $user = users_model::where('id',$id)->firstOrFail();
        return view('contact',compact('user'));
    }else{
        return view('contact');
    }
});
Route::get('/guide', function () {
    if (session('login')){
        $id = session('id');
        $user = users_model::where('id',$id)->firstOrFail();
        return view('guide',compact('user'));
    }else{
        return view('guide');
    }
});

Route::resource('/user', user_controller::class);
Route::post('login', 'user_controller@login')->name('login');
Route::get('logout', 'user_controller@logout')->name('logout');

