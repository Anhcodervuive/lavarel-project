<?php

use App\Http\Controllers\Admin\RoleController;
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
});

Route::get('/dashbroad', function () {
    return view('admin.dashbroad.index');
})->name('dashbroad');

Route::get('/home', function () {
    return view('client.layouts.app');
});

Auth::routes();

Route::resource('roles', RoleController::class);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');