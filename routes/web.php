<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\PeraturanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

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


Route::get('/migrate', function () {
    return Artisan::call('migrate');
});
Route::get('/migrate/fresh', function () {
    return Artisan::call('migrate:fresh');
});
Route::get('/seed', function () {
    return Artisan::call('db:seed');
});

Route::get('/', function () {
    return redirect()->route('dashboard.index');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/user', UserController::class)->middleware('role:admin')->except('show');
    Route::resource('/data-user', DataUserController::class)->middleware('role:admin')->except(['show', 'edit', 'destroy', 'create', 'store', 'update']);
    Route::resource('/peraturan', PeraturanController::class)->middleware('role:admin')->except(['show', 'edit', 'destroy', 'update']);
});

require __DIR__ . '/auth.php';
