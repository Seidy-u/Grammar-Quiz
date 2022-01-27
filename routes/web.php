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
    return view('toppage');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/quizmode',function(){
    return view('quizmode');
});

Route::get('/quiz',function(){
    return view('quiz');
});

Route::get('/judge',function(){
    return view('judge');
});

Route::get('/quiztable',function(){
    return view('quiztable');
});

Route::get('/quizedit',function(){
    return view('quizedit');
});

Route::get('/quizadd',function(){
    return view('quizadd');
});