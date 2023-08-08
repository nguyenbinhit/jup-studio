<?php

use App\Http\Controllers\Admins\EmployeeController;
use App\Http\Controllers\Admins\FileManagerController;
use App\Http\Controllers\Admins\HomeController;
use App\Http\Controllers\Admins\LoginController;
use App\Http\Controllers\Admins\Pages\AboutController;
use App\Http\Controllers\Admins\Pages\HomeController as PagesHomeController;
use App\Http\Controllers\Admins\Pages\LogoController;
use App\Http\Controllers\Admins\Pages\ReviewController;
use App\Http\Controllers\Admins\PlanController;
use App\Http\Controllers\Admins\ProductController;
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

        Route::get('contacts', [ContactController::class, 'index'])->name('contacts.index');

        Route::prefix('logo-pages')->name('pages.')->group(function () {
            Route::get('/{page:slug}', [LogoController::class, 'show'])->name('logo.show');
            Route::put('/{page:slug}', [LogoController::class, 'update'])->name('logo.update');
        });

        Route::prefix('home-pages')->name('pages.')->group(function () {
            Route::get('/{page:slug}', [PagesHomeController::class, 'show'])->name('home.show');
            Route::put('/{page:slug}', [PagesHomeController::class, 'update'])->name('home.update');
        });

        Route::prefix('review-pages')->name('pages.')->group(function () {
            Route::get('/', [ReviewController::class, 'index'])->name('review.index');
            Route::get('review-search', [ReviewController::class, 'search'])->name('review.search');
            Route::get('/create', [ReviewController::class, 'create'])->name('review.create');
            Route::post('/', [ReviewController::class, 'store'])->name('review.store');
            Route::get('/{review}', [ReviewController::class, 'show'])->name('review.show');
            Route::put('/{review}', [ReviewController::class, 'update'])->name('review.update');
            Route::delete('/{review}', [ReviewController::class, 'destroy'])->name('review.destroy');
        });

        Route::prefix('about-pages')->name('pages.')->group(function () {
            Route::get('/{page:slug}', [AboutController::class, 'show'])->name('about.show');
            Route::put('/{page:slug}', [AboutController::class, 'update'])->name('about.update');
        });

        Route::prefix('product-pages')->name('pages.')->group(function () {
            Route::get('/', [ProductController::class, 'index'])->name('product.index');
            Route::post('/', [ProductController::class, 'store'])->name('product.store');
            Route::put('/{product}', [ProductController::class, 'update'])->name('product.update');
            Route::delete('/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
        });

        Route::resource('users', UserController::class); // tk user
        Route::get('users-search', [UserController::class, 'search'])->name('users.search'); // users

        Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    });
});
