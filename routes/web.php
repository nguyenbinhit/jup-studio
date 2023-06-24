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
Route::get('/', function () {
    return view('welcome');
});



/**
 * Route Admin
 */
Route::prefix('admins')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('admin.login.index');
    Route::post('/', [LoginController::class, 'login'])->name('admin.login');


    Route::get('/', function () {
        return view('admins.body.content-page');
    })->name('admin.index');


    Route::get('/not-found-404', function () {
        return view('admins.error.404');
    });

    Route::get('/server-error-500', function () {
        return view('admins.error.500');
    });
});
