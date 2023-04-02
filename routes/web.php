<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrugController;

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

Route::get('/obat',[DrugController::class, 'index'])->name('obat');

Route::get('/tambahobat',[DrugController::class, 'tambahobat'])->name('tambahobat');

Route::post('/insertdata',[DrugController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{kode}',[DrugController::class, 'tampilkandata'])->name('tampilkandata');

Route::post('/updatedata/{kode}',[DrugController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{kode}',[DrugController::class, 'delete'])->name('delete');

