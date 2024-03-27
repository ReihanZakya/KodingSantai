<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ThemesController;
use App\Http\Controllers\CategoriesController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MainController::class,'show']);
Route::group(['middleware' => 'guest'], function (){
    Route::get('/register', [AuthController::class,'register'])->name('register');
});
Route::get('/login', [AuthController::class,'login']);
Route::get('/tema', [ThemesController::class,'show']);
Route::get('/materi', [ThemesController::class,'showMateri']);
Route::get('/kategori', [CategoriesController::class,'show']);

Route::get('/pengumuman', function () {
    return view('pengumuman');
});
