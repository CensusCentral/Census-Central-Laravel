<?php

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

Route::get('/', function () {
    return view('systemCudhao');
});

Route::get('/barangay', function () {
    return view('barangay');
});
Route::get('/reports', function () {
    return view('reports');
});
Route::get('/penalties', function () {
    return view('penalties');
});
Route::get('/analysis', function () {
    return view('analysis');
});

Route::get('/accounts', function () {
    return view('accounts');
});

// Route::get('/page1', [App\Http\Controllers\PageController::class, 'showPage1'])->name('barangay');
// Route::get('/page2', [App\Http\Controllers\PageController::class, 'showPage2'])->name('reports');
// Route::get('/page3', [App\Http\Controllers\PageController::class, 'showPage3'])->name('penalties');
// Route::get('/page4', [App\Http\Controllers\PageController::class, 'showPage4'])->name('analysis');
// Route::get('/page5', [App\Http\Controllers\PageController::class, 'showPage5'])->name('accounts');


