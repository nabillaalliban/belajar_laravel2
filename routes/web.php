<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Models\barang;
use App\Http\Controllers\SiswasController;
use App\Http\Controllers\ppdbcontroller;

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
    return view('welcome');
});

route::get('/home' , function(){
    return 'Selamat Datang Di Halaman HOME';
});

route::get('/about', function () {
    return 'Selamat Datang Di Halaman ABOUT';
});

route::get('/contact', function () {
    return 'Selamat Datang Di Halaman CONTACT';
});



route::get('/siswa', function(){

     $data_siswa = ['hana','nabilla','dhea','eva'];

     return view('tampil',compact('data_siswa'));
});

//route parameter
route::get('/tes/{nama1}/{tempat1}/{jk}/{agama}/{alamat}', function ($nama,$tempat,$jk,$agama,$alamat) {
    return "Nama : ".$nama."<br>".
           "Tempat Lahir : ".$tempat."<br>".
           "Jenis Kelamin : ".$jk."<br>".
           "Agama : ".$agama."<br>".
           "Alamat : ".$alamat;
});

route::get('/hitung/{bilangan1}/{bilangan2}', function ($b1,$b2) {

    return "Bilangan 1 :". $b1."<br>".
           "Bilangan 2 :".$b2."<br>".
           "Hasilnya :". $b1 + $b2;

});

route::get('/latihan/{nama2}/{telpon}/{jenisb}/{namab}/{jumlah}/{pembayaran}', function ($namap,$tel,$jenis,$namab,$jumlah,$metodebayar ) {
           if($jenis == "Handphone"){
        if ($namab == "Poco") {
             $harga = 3000000;
        } elseif ($namab == "Samsung") {
             $harga = 5000000;
        } elseif ($namab == "Iphone") {
             $harga = 15000000;
           }

           elseif($jenis == "Laptop"){
        } elseif ($namab == "Lenovo") {
             $harga = 4000000;
        } elseif ($namab == "Acer") {
             $harga = 8000000;
        } elseif ($namab == "Macbook") {
             $harga = 20000000;
           }

           elseif($jenis == "Tv"){
        } elseif ($namab == "Tohshiba") {
             $harga = 5000000;
        } elseif ($namab == "Samsungg") {
             $harga = 8000000;
        } elseif ($namab == "LG") {
             $harga = 10000000;
        } else {
            $harga = 0;
        }
           }

       if($metodebayar == "cash"){
        $potongan = 0;
       }elseif ($metodebayar == "transfer"){
        echo $potongan = 50000;
       }else{
        echo "0";
       };

       $total = $harga * $jumlah;

       if($total >= 10000000){
        $cashback = 500000;
       }else {
        echo "0";
       }

       return
       "Nama Pembeli :".$namap. "<br>".
       "Telepon :".$tel."<br>".
       "_____________________<br>".
       "Jenis Barang :".$jenis."<br>".
       "Nama Barang :".$namab."<br>".
       "Harga :". $harga."<br>".
       "Jumlah :".$jumlah."<br>".
       "______________________<br>".
       "Total :".$total."<br>".
       "Cashback :".$cashback."<br>".
       "Pembayaran:".$metodebayar."<br>".
       "______________________<br>".
       "Potongan :".$potongan. "<br>".
       "______________________<br>".
       "Total Pembayaran :". $total - $potongan - $cashback;
});


//routing dengan model
Route::get('/post', [PostsController::class, 'menampilkan']);
Route::get('/barang',[PostsController::class, 'menampilkan2']);

// Route::get('/barang', function(){

//     $barang = barang::all();
//     return view('tampil_barang',compact('barang'));
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//CRUD
Route::resource('siswa',SiswasController::class);

Route::resource('ppdb', ppdbController::class);
