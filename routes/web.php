<?php

use App\Http\Controllers\AccidenteController;
use Illuminate\Support\Facades\Route;

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

Route::post('accidente/store', [AccidenteController::class,'store'])->name('accidente.store');
Route::get('accidente/create',[AccidenteController::class,'create']);
Route::get('accidente/listar',[AccidenteController::class,'index'])->name('accidente.index');
Route::get('accidente/{accidente}',[AccidenteController::class,'show'])->name('accidente.show');
Route::delete('accidente/{accidente}',[AccidenteController::class,'destroy'])->name('accidente.destroy');
Route::put('accidente/{accidente}',[AccidenteController::class,'update'])->name('accidente.update');
Route::get('accidente/{accidente}/editar',[AccidenteController::class,'edit'])->name('accidente.edit');
