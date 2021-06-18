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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'AuthenticateController@index');



Auth::routes();

Route::group(['middleware' => 'admin'], function (){
    Route::get('/e-vote/admin', 'AdminController@index');
    // Route::get('/e-vote/admin/dashboard', 'AdminController@dashboard');
    Route::get('/e-vote/admin/candidate', 'CandidateAdminController@index');
    Route::get('/e-vote/admin/candidate/add', 'CandidateAdminController@add');
    Route::post('/e-vote/admin/candidate/store', 'CandidateAdminController@store');
    Route::get('/e-vote/admin/candidate/edit/{id}', 'CandidateAdminController@edit');
    Route::put('/e-vote/admin/candidate/update/{id}', 'CandidateAdminController@update');
    Route::get('/e-vote/admin/candidate/delete/{id}', 'CandidateAdminController@delete');
    Route::get('/e-vote/admin/user', 'UserController@index');
    Route::get('/e-vote/admin/user/add', 'UserController@add');
    Route::post('/e-vote/admin/user/store', 'UserController@store');
    Route::get('/e-vote/admin/user/edit/{id}', 'UserController@edit');
    Route::put('/e-vote/admin/user/update/{id}', 'UserController@update');
    Route::get('/e-vote/admin/user/delete/{id}', 'UserController@delete');
    Route::get('/e-vote/admin/user/import', 'ImportUserController@import');
    Route::post('/e-vote/admin/user/import-excel', 'ImportUserController@import_excel');
    Route::get('/e-vote/admin/community', 'CommunityController@index');
    Route::get('/e-vote/admin/community/add', 'CommunityController@add');
    Route::post('/e-vote/admin/community/store', 'CommunityController@store');
    Route::get('/e-vote/admin/community/edit/{id}', 'CommunityController@edit');
    Route::put('/e-vote/admin/community/update/{id}', 'CommunityController@update');
    Route::get('/e-vote/admin/community/delete/{id}', 'CommunityController@delete');
    Route::get('/e-vote/admin/community/import', 'ImportCommunityController@import');
    Route::post('/e-vote/admin/community/import-excel', 'ImportCommunityController@import_excel');
    Route::resource('/e-vote/admin/generate', 'generate_codeController');
});



Route::group(['middleware' => 'user'], function(){
    Route::get('/e-vote/user', 'HomeController@index')->name('home');
    Route::get('/e-vote/user/candidate', 'CandidateUserController@index');
    Route::get('/e-vote/user/candidate/register', 'CandidateUserController@register');
    Route::post('/e-vote/user/candidate/store', 'CandidateUserController@store');

});

Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/', 'HomeController@index');
Route::get('/registrasi', function () {
    return view('registrasi');
});
Route::get('/syarat', function () {
    return view('syarat');
});
Route::get('/visi1', 'HomeController@visi1', function () {
    return view('visi1');
});
Route::post('voting', 'HomeController@test');
