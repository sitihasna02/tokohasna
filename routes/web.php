<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\RegistrasiController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/menu', function () {
    return view('tampilan.menu');
});

// Route::get('/menu', function () {
//     return view('tampilan.menu');


// });

// Route::get('/order', function () {
//     return view('tampilan.pesanan.tambah');
// });

// pemesanancontroller
route::get('/pesanan', [PesananController::class, 'index' ]);
route::get('/order', [PesananController::class, 'create' ]);
route::post('/order', [PesananController::class, 'store' ]);
Route::resource('pesanan', PesananController::class);

// register 
Route::get('/register', [RegistrasiController::class, 'index']);
Route::post('/register', [RegistrasiController::class, 'store']);

// login
Route::get('/', [LoginController::class, 'index']);
Route::post('/', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);



