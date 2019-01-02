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

Route::get("/Order",'Order\IndexController@Order');
Route::get("/Vip/{id}",'Vip\IndexController@vip');
Route::get("/Add",'Vip\IndexController@add');
Route::get("/Update/{uid}","Vip\IndexController@update");
Route::get("/Delete/{did}","Vip\IndexController@del");
Route::get("/List","Vip\IndexController@list");
