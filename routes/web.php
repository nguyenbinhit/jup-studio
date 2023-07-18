<?php

use App\Http\Controllers\Admins\EmployeeController;
use App\Http\Controllers\Admins\FileManagerController;
use App\Http\Controllers\Admins\HomeController;
use App\Http\Controllers\Admins\LoginController;
use App\Http\Controllers\Admins\PageController;
use App\Http\Controllers\Admins\PlanController;
use App\Http\Controllers\Admins\UserController;
use App\Http\Controllers\Client\ClientHomeController;
use App\Http\Controllers\Client\ContactController;
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
Route::get('/', [ClientHomeController::class, 'index'])->name('client-home');
Route::post('clients/contacts', [ContactController::class, 'store'])->name('client-contact'); // contact

/**
 * Route Admin
 */
Route::prefix('admins')->name('admin.')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login.index');
    Route::post('/login', [LoginController::class, 'login'])->name('login');


    Route::get('/not-found-404', function () {
        return view('admins.error.404');
    })->name('404');

    Route::get('/server-error-500', function () {
        return view('admins.error.500');
    })->name('500');

    Route::middleware('auth')->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('index');

        Route::resource('employees', EmployeeController::class); // Employees
        Route::get('employees-search', [EmployeeController::class, 'search'])->name('employees.search'); // Employees

        Route::get('/images', [FileManagerController::class, 'index'])->name('image.index'); // files

        Route::resource('plans', PlanController::class); // plans

        Route::get('contacts',[ContactController::class,'index'])->name('contacts.index');

        Route::resource('pages', PageController::class); // Trang tĩnh

        Route::resource('users', UserController::class); // tk user
        Route::get('users-search', [UserController::class, 'search'])->name('users.search'); // users

        Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    });
});
