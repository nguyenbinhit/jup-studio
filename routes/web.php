<?php

use App\Http\Controllers\Admins\LoginController;
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

/**
 * Route Client
 */
Route::group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
});



/**
 * Route Admin
 */
Route::prefix('admins')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('admin.login.index');
    Route::post('/', [LoginController::class, 'login'])->name('admin.login');
});
