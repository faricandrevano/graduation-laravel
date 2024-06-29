<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormPengumuman;

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

Route::get('/', [FormPengumuman::class,'index']);
Route::get('/hasil_proses',[FormPengumuman::class, 'hasil_proses'])->name('post.hasil');
Route::get('/hasil',[FormPengumuman::class, 'hasil'])->name('hasil');