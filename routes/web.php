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

Route::get('/articles', function () {
    return 'Article List';
});
Route::get('/articles/detail', function () {
    return 'Article Detail';
});
Route::get('/articles/detail/{id}', function ($id) {
    return "Article Detail - $id";
});
Route::get('/articles/more', function () {
    return redirect('/articles/detail');
});
Route::get('/articles/details', function () {
    return 'Article Details';
})->name('article.details');
Route::get('/articles/mores', function () {
    return redirect()->route('article.details');
});
