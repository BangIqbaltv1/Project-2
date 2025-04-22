<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrameworkController;
use App\Http\Controllers\Admin\FrameworkAdminController;

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
    return view('welcome');
});


Route::get('/', [HomeController::class, 'index']);
Route::get('/artikel', [ArtikelController::class, 'index']);
Route::get('/programming-edukasi', [ProgramController::class, 'index']);
Route::get('/about-us', [PageController::class, 'about']);
Route::get('/feedback', [FeedbackController::class, 'index']);
Route::get('/create-post', [PostController::class, 'create'])->middleware('auth');
Route::post('/create-post', [PostController::class, 'store'])->middleware('auth');

Auth::routes();

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/frameworks/{id}', [FrameworkController::class, 'show'])->name('frameworks.show');



Route::prefix('admin')->group(function () {
    Route::get('/frameworks', [FrameworkAdminController::class, 'index'])->name('admin.frameworks.index');
    Route::get('/frameworks/create', [FrameworkAdminController::class, 'create'])->name('admin.frameworks.create');
    Route::post('/frameworks', [FrameworkAdminController::class, 'store'])->name('admin.frameworks.store');
    Route::get('/frameworks/{id}/edit', [FrameworkAdminController::class, 'edit'])->name('admin.frameworks.edit');
    Route::put('/frameworks/{id}', [FrameworkAdminController::class, 'update'])->name('admin.frameworks.update');
    Route::delete('/frameworks/{id}', [FrameworkAdminController::class, 'destroy'])->name('admin.frameworks.destroy');
});

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
});
