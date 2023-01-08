<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\LivroController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index', 'LivroController@index')->name('index');
Route::get('/create', 'LivroController@create')->name('create');
Route::post('store/', 'LivroController@store')->name('store');
Route::get('show/{livro}', 'LivroController@show')->name('show');
Route::get('edit/{livro}', 'LivroController@edit')->name('edit');
Route::put('edit/{livro}','ProductController@update')->name('update');
Route::delete('/{livro}','LivroController@destroy')->name('destroy');


Route::get('login/facebook',[SocialController::class,'facebookRedirect']);
Route::get('login/facebook/callback',[SocialController::class,'loginWithFacebook']);

Route::get('login/google',[SocialController::class,'googleRedirect']);
Route::get('login/google/callback',[SocialController::class,'loginWithGoogle']);

Route::get('login/github',[SocialController::class,'githubRedirect']);
Route::get('login/github/callback',[SocialController::class,'loginWithGithub']);
