<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KetoanController;
use App\Http\Controllers\DanhmucController;
use App\Http\Controllers\HoneyController;

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
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
#Route::get('/lien-he(đường dẫn)', [ProPhuongnamController::class, 'lienhe (tên fublic trong controller)'])->name('pn.lienhe (là controller) ');
// home layout
Route::get('', [KetoanController::class, 'trangchu'])->name('trangchu');
Route::get('tin-tuc', [KetoanController::class, 'tintuc'])->name('tintuc');
Route::get('dich-vu', [KetoanController::class, 'dichvu'])->name('dichvu');
Route::get('nghe-nghiep', [KetoanController::class, 'nghenghiep'])->name('nghenghiep');
Route::get('gioi-thieu', [KetoanController::class, 'gioithieu'])->name('gioithieu');
Route::get('lien-he', [KetoanController::class, 'lienhe'])->name('lienhe');


// end home layout





