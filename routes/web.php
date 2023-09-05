<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;

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
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/add/student',[StudentController::class,'addStudent'])->name('add-student');
Route::post('/store',[StudentController::class,'store'])->name('store');
Route::post('/update',[StudentController::class,'update'])->name('update');
Route::get('/mange/student',[StudentController::class,'manageStudent'])->name('manage-student');
Route::get('/edit/student/{id}',[StudentController::class,'edit'])->name('edit');
Route::get('/delete/student/{id}',[StudentController::class,'delete'])->name('delete');
