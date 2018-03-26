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


Route::get('/3_3_1', function () {
    return view('news');
});

Route::get('/3_3_2',function(){
    return view('news_page');
});

Route::get('/3_4_1',function(){
    return view('raise_list');
});
Route::get('/3_4_2',function(){
    return view('raise_content');
});

Route::get('/3_4_3',function(){
    return view('raise_donate');
});

Route::get('/3_4_4',function(){
    return view('raise_donate_c');
});

Route::get('/3_4_5',function(){
    return view('3_4_5');
});

Route::get('/3_4_6',function(){
    return view('3_4_6');
});

Route::get('/3_5_1',function(){
    return view('3_5_1');
});

Route::get('/3_5_2',function(){
    return view('3_5_2');
});

Route::get('/3_5_3',function(){
    return view('3_5_3');
});

Route::get('/3_5_4',function(){
    return view('3_5_4');
});

Route::get('/3_5_5',function(){
    return view('3_5_5');
});

Route::get('/3_5_6',function(){
    return view('3_5_6');
});

Route::get('/3_6_1',function(){
    return view('3_6_1');
});

Route::get('/3_6_2',function(){
    return view('3_6_2');
});