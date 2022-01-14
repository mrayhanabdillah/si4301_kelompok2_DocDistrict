<?php

use Illuminate\Support\Facades\Route;
use App\Models\users_model;
use App\Models\docs_model;
use App\Models\artikel_model;

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
        $docs = docs_model::all();
        $artikels = artikel_model::orderby('id_artikel','asc')->get();
        $about = 'Menurut sejarahnya Desa Cipanas mulai berdiri sejak tahun 1926, dan secara adminitratif resmi berdiri pada tahun 1936, kemudian Desa Cipanas mengalami pemekaran wilayah pada tanggal 1 Oktober 1977, menjadi 3 ( tiga ) Desa yaitu :

            Desa Cipanas sebagai Desa asal , Desa Cipendawa dan Desa Sindanglaya sebagai desa-desa pemekaran ( berdasarkan Surat Keputusan Bapak Bupati KDH TK II Cianjur tanggal 1 Oktober 1977 Nomor :100/HK.021.1/PM/015.3/1977 ).
            
            Kemudian pada tahun 1982 Desa Cipanas mengalami pemekaran wilayah kembali menjadi 3 ( tiga ) Desa yaitu : Desa Cipanas sebagai Desa asal, Desa Gadog dan Desa Sukatani seabagai desa pemekaran ( berdasarkan Surat keputusan Gubernur KDH TK I Jawa Barat nomor :146.1/SK/1382-Pem dan SK Bupati KDH TK II Cianjur nomor :146.1/199/Pem/1982 ).
            
            Pada tanggal 12 Oktober 2004 wilayah Kecamatan Pacet dimekarkan menjadi 2 ( dua ) kecamatan berdasarkan Peraturan Daerah ( Perda ) Kabupaten Cianjur Nomor : 07 Tahun 2004 , yaitu Kecamatan Pacet sebagai Kecamatan Induk atau asal dan Kecamatan Cipanas sebagai kecamatan pemekaran, dan Desa Cipanas masuk ke wilayah Kecamatan Cipanas.
            
            Mengenai asal usul nama Desa Cipanas adalah berasal dari kata “Ci-panas” menurut bahasa Sunda terdiri dari dua suku kata yaitu “Ci” artinya Cai atau Zat Cair dan “Panas” artinya hangat sekali atau bersuhu relatif tinggi ,maka Cipanas sama artinya dengan “Air Panas” , desanya bernama Cipanas tetapi udaranya berhawa dingin dan sejuk.
            
            Pemberian nama Desa Cipanas di ambil dari nama sumber mata air panas yang berasal dari Gunung Gede , hingga kini keberadaannya terpelihara di komplek Istana Kepresidenan Cipanas.
            
            Sumber mata air panas tersebut konon airnya mengandung unsur belerang sehingga berkhasiat untuk menyembuhkan penyakit kulit (seperti kudis) dll . Dimana dahulu sumber mata air panas tersebut dapat digunakan bebas oleh masyarakat dan terbuka untuk umum , tetapi sekarang hanya tamu-tamu khusus kenegaraan dan atau yang telah memiliki izin yang dapat melihat dan menyentuh air panas tersebut karena berada dilingkungan Istana kepresidenan Cipanas .';
        return view('home',compact('user','docs','artikels','about'));
    }else{
        $artikels = artikel_model::orderby('id_artikel','asc')->get();
        $about = 'Menurut sejarahnya Desa Cipanas mulai berdiri sejak tahun 1926, dan secara adminitratif resmi berdiri pada tahun 1936, kemudian Desa Cipanas mengalami pemekaran wilayah pada tanggal 1 Oktober 1977, menjadi 3 ( tiga ) Desa yaitu :

            Desa Cipanas sebagai Desa asal , Desa Cipendawa dan Desa Sindanglaya sebagai desa-desa pemekaran ( berdasarkan Surat Keputusan Bapak Bupati KDH TK II Cianjur tanggal 1 Oktober 1977 Nomor :100/HK.021.1/PM/015.3/1977 ).
            
            Kemudian pada tahun 1982 Desa Cipanas mengalami pemekaran wilayah kembali menjadi 3 ( tiga ) Desa yaitu : Desa Cipanas sebagai Desa asal, Desa Gadog dan Desa Sukatani seabagai desa pemekaran ( berdasarkan Surat keputusan Gubernur KDH TK I Jawa Barat nomor :146.1/SK/1382-Pem dan SK Bupati KDH TK II Cianjur nomor :146.1/199/Pem/1982 ).
            
            Pada tanggal 12 Oktober 2004 wilayah Kecamatan Pacet dimekarkan menjadi 2 ( dua ) kecamatan berdasarkan Peraturan Daerah ( Perda ) Kabupaten Cianjur Nomor : 07 Tahun 2004 , yaitu Kecamatan Pacet sebagai Kecamatan Induk atau asal dan Kecamatan Cipanas sebagai kecamatan pemekaran, dan Desa Cipanas masuk ke wilayah Kecamatan Cipanas.
            
            Mengenai asal usul nama Desa Cipanas adalah berasal dari kata “Ci-panas” menurut bahasa Sunda terdiri dari dua suku kata yaitu “Ci” artinya Cai atau Zat Cair dan “Panas” artinya hangat sekali atau bersuhu relatif tinggi ,maka Cipanas sama artinya dengan “Air Panas” , desanya bernama Cipanas tetapi udaranya berhawa dingin dan sejuk.
            
            Pemberian nama Desa Cipanas di ambil dari nama sumber mata air panas yang berasal dari Gunung Gede , hingga kini keberadaannya terpelihara di komplek Istana Kepresidenan Cipanas.
            
            Sumber mata air panas tersebut konon airnya mengandung unsur belerang sehingga berkhasiat untuk menyembuhkan penyakit kulit (seperti kudis) dll . Dimana dahulu sumber mata air panas tersebut dapat digunakan bebas oleh masyarakat dan terbuka untuk umum , tetapi sekarang hanya tamu-tamu khusus kenegaraan dan atau yang telah memiliki izin yang dapat melihat dan menyentuh air panas tersebut karena berada dilingkungan Istana kepresidenan Cipanas .';
        return view('home',compact('artikels','about'));
    }
});

Route::get('/admin',function(){
    return view('admin.loginadmin');
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
Route::get('/viewArtikel/{artikel}','artikel_controller@detail');

// ROUTE DOCUMENT
Route::get('/document','doc_controller@show');
Route::post('addDoc','mydoc_controller@store')->name('addDoc');
Route::get('mydoc','mydoc_controller@showmyDoc')->name('mydoc');
Route::delete('/mydoc/delete/{mydoc}','mydoc_controller@delMyDoc');
Route::post('/download/{mydoc}','mydoc_controller@pdfdownload');

// ROUTE ADMIN

Route::get('/index-admin','admin_controller@index');
Route::get('/DocWarga','admin_controller@docWarga');
Route::post('/login-admin','admin_controller@loginAdmin');
Route::get('logoutAdmin', 'admin_controller@logout')->name('logoutAdmin');
Route::put('/update/{mydoc}','admin_controller@terima');
Route::put('/tolak/{mydoc}','admin_controller@tolak');
Route::get('/artikel','artikel_controller@index');
Route::post('/addArtikel','artikel_controller@addArtikel');
Route::put('/artikel/update/{artikel}','artikel_controller@updateArtikel');
Route::delete('/artikel/delete/{artikel}','artikel_controller@delArtikel');
Route::get('/artikel/detail/{artikel}','artikel_controller@show');
