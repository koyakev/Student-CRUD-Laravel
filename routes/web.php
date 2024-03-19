<?php

use App\Http\Controllers\QrCodeController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', [StudentController::class, 'index'])->name('index');

Route::get('/create', [StudentController::class, 'create'])->name('createStudent');

Route::post('/createStudent', [StudentController::class, 'store'])->name('store');

Route::delete('/delete/{student}', [StudentController::class, 'destroy'])->name('delete');

Route::get('/edit/{student}', [StudentController::class, 'edit'])->name('edit');

Route::put('/update/{student}', [StudentController::class, 'update'])->name('update');

Route::get('/display/{student}', [StudentController::class, 'display'])->name('display');
