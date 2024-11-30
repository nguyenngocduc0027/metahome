<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AvatarController;
use App\Models\Avatar;
use Illuminate\Support\Facades\Route;

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
    return view('admin/index');
});


// Account
Route::get('/account', [AccountController::class, 'show'])->name('account-show');
Route::get('/create-account', [AccountController::class, 'create'])->name('account-create');
Route::get('/detail-account-{userId}', [AccountController::class, 'detail']);
Route::get('/edit-account-{userId}', [AccountController::class, 'edit']);
Route::post('/update-account-{userId}', [AccountController::class, 'update']);
Route::get('/permission-account', [AccountController::class, 'permission'])->name('account-permission');
Route::post('/add-account', [AccountController::class, 'add'])->name('add-account');
Route::get('/delete-account-{userId}', [AccountController::class, 'delete']);

// Avatar
Route::post('/store', [AvatarController::class, 'store'])->name('store');
