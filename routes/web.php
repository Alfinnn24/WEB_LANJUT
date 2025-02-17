<?php

use Illuminate\Support\Facades\Route; //mengimpor kelas Route untuk mendefinisikan rute
use App\Http\Controllers\ItemController; //mengimpor ItemController untuk menangani permintaan terkait item

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

Route::get('/', function () { //mendefinisikan rute untuk halaman utama ('/')
    return view('welcome'); //menampilkan tampilan 'welcome.blade.php'
});
Route::resource('items', ItemController::class); //membuat rute resource untuk CRUD pada ItemController
