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
    return view('welcome');
});

Route::get('/template', [App\Http\Controllers\PageController::class, 'index'])->name('template.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/todo', [App\Http\Controllers\TodoController::class, 'index'])->name('todo.index');

Route::get('/format-currency', [App\Http\Controllers\PageController::class, 'format_currency'])->name('template.index');
