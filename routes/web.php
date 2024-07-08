<?php

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
    return view('layouts.home.home');
});

Route::get('/main', function () {
    return view('layouts.main.main');
})->name('main');

Route::get('/main-2', function () {
    return view('layouts.main.main-2');
})->name('main-2');
Route::get('/main-3', function () {
    return view('layouts.main.main-3');
})->name('main-3');
Route::get('/su-kien', function () {
    return view('layouts.sukien.su-kien');
})->name('su-kien');
Route::get('/ve-trong-cong-vien', function () {
    return view('layouts.giave.ve-trong-cong-vien');
})->name('ve-trong-cong-vien');
Route::get('/ve-tap-the-duc', function () {
    return view('layouts.giave.ve-tap-the-duc');
})->name('ve-tap-the-duc');
Route::get('/ve-tap-the', function () {
    return view('layouts.giave.ve-tap-the');
})->name('ve-tap-the');
Route::get('/ve-dich-vu', function () {
    return view('layouts.giave.ve-dich-vu');
})->name('ve-dich-vu');