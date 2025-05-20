<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

Route::get('/', function () {
    return view('home');
});


Route::get('/report', function () {
    return view('report');
})->middleware('auth');

Route::get('/list',[AppController::class , 'list'])->middleware('auth');

Route::get('/login', [AppController::class , 'showlogin'])->name('login');
Route::post('/login',[AppController::class , 'login']);

Route::get('/register', [AppController::class , 'showregister'])->name('register');
Route::post('/register',[AppController::class , 'register']);

Route::post('/logout',[AppController::class , 'logout']);

Route::post('/report',[AppController::class , 'report']);

Route::post('/report/delete/{id}', [AppController::class, 'delete'])->name('report.delete');


Route::get('/admin', [AppController::class , 'check_admin'])->name('admin');