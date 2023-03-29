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

Route::get('/h4l4m4nl0g1nR4m4Y4n4', 'LoginController@index');
Route::post('/login-proses', 'LoginController@login');

Route::group(['middleware' => ['revalidate','SessionCheck']], function () {
    Route::get('/logout', 'LoginController@logout');
    
    Route::get('/', 'HomeController@index');
    Route::get('/SubMenu1', 'SubMenu1Controller@index');
    Route::post('/getListSubMenu1', 'SubMenu1Controller@getList');


});
