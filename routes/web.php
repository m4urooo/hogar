<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\MantenedorController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');


// Route::middleware(['auth'])->group(function () {

//     Route::get('/usuarios',[UserController::class,'index']);
//     Route::get('/usuarios/edit/{id}',[UserController::class,'edit']);
    
// });



Route::prefix('empleados')->name('empleados.')->middleware('auth')->group(function () {

    Route::get('index',[EmpleadoController::class,'index'])->name('index');
    Route::get('edit/{id}',[EmpleadoController::class,'edit'])->name('edit');
    Route::get('new',[EmpleadoController::class,'new'])->name('new');
    Route::post('store', [EmpleadoController::class,'store'])->name('store');
    Route::put('update/{id}', [EmpleadoController::class,'update'])->name('update');


    
});
  
Route::prefix('mantenedores')->name('mantenedores.')->middleware('auth')->group(function () {

    Route::get('index',[MantenedorController::class,'index'])->name('index');



    
});

Route::prefix('pdf')->name('pdf.')->middleware('auth')->group(function(){

    Route::get('crear', [PDFController::class,'crear'])->name('crear');
    Route::get('getPDF',[PDFController::class,'getPDF'])->name('getPDF');
    Route::post('crearPDF',[PDFController::class, 'crearPDF'])->name('crearPDF');
    

});