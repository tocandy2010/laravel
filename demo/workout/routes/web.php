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


//Route::get('/lab/{t1}/{t2}','LabController@index');

Route::get('/lab','LabController@param');

Route::get('/lab/form', "LabController@getForm");
Route::post('/lab/form/{id}', "LabController@postForm");

Route::get('/lab/xml', "LabController@xml");

//自訂路由要放在resource前
Route::resource('data','DataController',
    /*參數3可以限制
    ['only'=>['index','show']] 
    */  
);