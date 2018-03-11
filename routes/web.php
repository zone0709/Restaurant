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
Route::get('Home',[
    'uses'=>'HomeController@getHome',
    'as'=>'user_home'
]);
Route::get('about',[
    'uses'=>'HomeController@getabout',
    'as'=>'aboutpage'
]);
Route::get('checkout',[
    'uses'=>'HomeController@getcheckout',
    'as'=>'checkout'
]);
Route::get('contact',[
    'uses'=>'HomeController@getcontact',
    'as'=>'contact'
]);
Route::get('detail',[
    'uses'=>'HomeController@getdetail',
    'as'=>'detail'
]);
Route::get('menu',[
    'uses'=>'HomeController@getmenu',
    'as'=>'menu'
]);
Route::get('search',[
    'uses'=>'HomeController@getsearch',
    'as'=>'search'
]);
Route::get('typefood',[
    'uses'=>'HomeController@gettypefood',
    'as'=>'typefood'
]);
