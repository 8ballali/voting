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

Route::get('/e-vote/admin/community', 'CommunityController@index');

Route::get('/e-vote/admin/community/add', 'CommunityController@add');

Route::post('/e-vote/admin/community/store', 'CommunityController@store');

Route::get('/e-vote/admin/community/edit/{id}', 'CommunityController@edit');

Route::put('/e-vote/admin/community/update/{id}', 'CommunityController@update');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
