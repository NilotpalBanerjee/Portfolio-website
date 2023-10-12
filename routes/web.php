<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\SkilsController;


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
    // return view('welcome');
    return view('frontend.pages.index');
});

Route::get('/admin/login', [AuthController::class,'getLogin'])->name('getLogin');
Route::post('/admin/login', [AuthController::class,'postLogin'])->name('postLogin');

Route::group(['middleware'=>['admin_auth']],function(){
    
    Route::get('/admin/dashboard',[ProfileController::class,'dashboard'])->name('dashboard');
    Route::get('/admin/logout',[AuthController::class,'logout'])->name('logout');

    Route::get('/admin/skils', [SkilsController::class,'index'])->name('skils');
    Route::get('/admin/skils-add', [SkilsController::class,'add'])->name('add-skils');
    Route::post('/admin/skils-store', [SkilsController::class,'store'])->name('store-skils');
    Route::get('/admin/{id}/skils-edit', [SkilsController::class,'edit'])->name('edit-skils');
    Route::put('/admin/{id}/skils-update', [SkilsController::class,'update'])->name('update-skils');
    Route::get('/admin/{id}/skils-delete', [SkilsController::class,'delete'])->name('delete-skils');

});

Route::get('/', [SkilsController::class,'show'])->name('skill');

