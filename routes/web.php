<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\KonsepController;
use App\Http\Controllers\PenugasanController;
use App\Http\Controllers\PeraturanController;
use App\Http\Controllers\TopensisanController;
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

    Route::resource('/data-user', DataUserController::class)->except(['show', 'edit', 'destroy', 'create', 'store', 'update']);
    Route::resource('/peraturan', PeraturanController::class)->except(['edit', 'destroy', 'update']);
    Route::resource('/konsep', KonsepController::class)->except(['edit', 'destroy', 'update']);
    Route::resource('/topensisan', TopensisanController::class)->except(['edit', 'destroy', 'update']);

    Route::get('/topensisan-spt', [TopensisanController::class, 'createSpt'])->name('topensisan.spt.create');
    Route::get('/topensisan-spt-store', [TopensisanController::class, 'storeSpt'])->name('topensisan.spt.store');
    Route::get('/topensisan-ks', [TopensisanController::class, 'createSpt'])->name('topensisan.ks.create');
    Route::get('/topensisan-cs', [TopensisanController::class, 'createSpt'])->name('topensisan.cs.create');
    Route::get('/topensisan-kp', [TopensisanController::class, 'createSpt'])->name('topensisan.kp.create');
    Route::get('/topensisan-ts', [TopensisanController::class, 'createSpt'])->name('topensisan.ts.create');


    Route::resource('/penugasan', PenugasanController::class)->except(['edit', 'destroy', 'update']);

    Route::resource('/user', UserController::class)->middleware('role:admin')->except('show');
});

require __DIR__ . '/auth.php';
