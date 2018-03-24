<?php

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

Route::get('/index', function () {
    return view('index');
});


Route::get('/base', function () {
    return view('layouts.base');
});


Route::get('/news', function () {
    return view('news');
});

Route::get('/news_page',function(){
    return view('news_page');
});

Route::get('/raise',function(){
    return view('raise_list');
});
Route::get('/raise_c',function(){
    return view('raise_content');
});

Route::get('/raise_d',function(){
    return view('raise_donate');
});