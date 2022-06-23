<?php

use App\Http\Controllers\Admin\PropertyController;
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

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('home');
    })->middleware(['verified']);

    Route::prefix('properties')->group(function () {
        Route::get('/', [PropertyController::class, 'index'])->name('property');
        Route::get('/add', function () {
            return view('properties.add');
        });
        Route::post('/store', [PropertyController::class, 'store']);
        Route::delete('/destroy/{id}', [PropertyController::class, 'destroy'])->name('deleteProperty');
    });
});

Route::get('/web', [PropertyController::class, 'show']);
