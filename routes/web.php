<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesChildController;
use App\Http\Controllers\HomeImageController;
use App\Http\Controllers\LichSuHinhThanhController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EventController;

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

Route::get('/main', [HomeImageController::class, 'show'])->name('main');
Route::get('/main-2', [CategoriesChildController::class, 'index'])->name('main-2');

/* sự  kiện*/
Route::get('/su-kien', [EventController::class, 'index'])->name('su-kien');
Route::get('/warter-show', function () {
    return view('layouts.sukien.warter-show');
})->name('warter-show');

/* vé*/
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
Route::prefix('gioi-thieu')->name('gioi-thieu.')->group(function () {
    Route::get('/', function () {
        return view('layouts.gioi-thieu.gioi-thieu');
    })->name('gioi-thieu');

    Route::get('/lich-su-hinh-thanh', [LichSuHinhThanhController::class, 'index'])->name('lich-su-hinh-thanh');
    Route::get('/thanh-vien', [ImageController::class, 'showMImages'])->name('thanh-vien');
    Route::get('/thanh-vien', [MemberController::class, 'showMembers'])->name('thanh-vien');
    
    Route::get('/chinh-sach-bao-mat', function () {
        return view('layouts.gioi-thieu.chinh-sach-bao-mat');
    })->name('chinh-sach-bao-mat');
});

//tro-choi
Route::get('/ca-chep-nhao-lon', function () {
    return view('layouts.tro-choi.ca-chep-nhao-lon');
})->name('ca-chep-nhao-lon');

//vườn thú
Route::get('/khi-duoi-dai', function () {
    return view('layouts.vuon-thu.khi-duoi-dai');
})->name('khi-duoi-dai');

//cảnh đẹp
Route::group([], function () {
    Route::get('/post/{post_id}', [PostController::class, 'showThucVat'])->name('thuc-vat');
    Route::get('/show/{post_id}', [PostController::class, 'show'])->name('post.show');
    Route::get('/quang-truong-vua-hung', [PostController::class, 'showCanhDep'])->name('canh-dep');
});

// khám phá
Route::get('/kham-pha', function () {
    return view('layouts.kham-pha.kham-pha');
})->name('kham-pha');