<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
})->name('home');

Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('service', [HomeController::class, 'service'])->name('service');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('resi', [HomeController::class, 'cekresi'])->name('resi');
Route::post('resi', [HomeController::class, 'checkResi'])->name('cek-resi.check');

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('product', ProductController::class);
    Route::get('get-product', [ProductController::class, 'getData'])->name('productData');
});

require __DIR__.'/auth.php';
