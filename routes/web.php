<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AppController;



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
});
//  Route::get('/', function () {
//      return view('layouts.index');
//  });


Auth::routes();
//Route::prefix('admin')->middleware(['auth'])->group(function(){
   // Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
//});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function(){
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('annonces', [App\Http\Controllers\Admin\AnnoncesController::class, 'index']);
    Route::get('/new', [App\Http\Controllers\AppController::class, 'new']);
});