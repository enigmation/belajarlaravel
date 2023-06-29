<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\WisataController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/siswa', function(){
//     return view('siswa');
// });

// Route::get('/siswa/{nama}',function ($nama){
//     return view('siswa',['nama'=>$nama]);
// });

Route::get('/siswa/{nama}',function ($nama=null){
    return view('siswa',['nama'=>$nama]);
});

Route::get('blog/index', [BlogController::class, 'index']);

Route::get('blog/tentang', [BlogController::class, 'tentang']);

Route::get('blog/kontak', [BlogController::class, 'kontak']);

Route::get('/wisata/index',[WisataController::class,'index']);

Route::get('/wisata/about',[WisataController::class,'about']);

Route::get('/wisata/contact',[WisataController::class,'contact']);