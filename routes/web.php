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

// giới thiệu
Route::get('/gioi-thieu', function () {
    return view('layouts.gioi-thieu.gioi-thieu');
})->name('gioi-thieu');

Route::get('/lich-su-hinh-thanh', function () {
    return view('layouts.gioi-thieu.lich-su-hinh-thanh');
})->name('lich-su-hinh-thanh');
Route::get('/thanh-vien', function () {
    return view('layouts.gioi-thieu.thanh-vien');
})->name('thanh-vien');
Route::get('/chinh-sach-bao-mat', function () {
    return view('layouts.gioi-thieu.chinh-sach-bao-mat');
})->name('chinh-sach-bao-mat');

//tro-choi
Route::get('/ca-chep-nhao-lon', function () {
    return view('layouts.tro-choi.ca-chep-nhao-lon');
})->name('ca-chep-nhao-lon');

//vườn thú
Route::get('/khi-duoi-dai', function () {
    return view('layouts.vuon-thu.khi-duoi-dai');
})->name('khi-duoi-dai');

//cảnh đẹp
Route::get('/canh-dep', function () {
    return view('layouts.canh-dep.canh-dep');
})->name('canh-dep');