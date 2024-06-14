<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
  return view('pages.home');
})->name('homepage');
Route::get('/characters', function () {
    return view('pages.chars.listPublic');
})->name('characters.public');
Route::get('/admin', function () {
    return view('pages.admin');
})->name('admin');

