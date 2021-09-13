<?php

use App\Http\Controllers\SponsorController;
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

Route::get('/', 'HomeController@index');



Auth::routes();

Route::group(['middleware' => 'admin'], function () {
    Route::get('/e-vote/admin', 'AdminController@index');
    // Route::get('/e-vote/admin/dashboard', 'AdminController@dashboard');
    Route::get('/e-vote/admin/candidate', 'CandidateAdminController@index');
    Route::get('/e-vote/admin/candidate/add', 'CandidateAdminController@add');
    Route::post('/e-vote/admin/candidate/store', 'CandidateAdminController@store');
    Route::get('/e-vote/admin/candidate/edit/{id}', 'CandidateAdminController@edit');
    Route::put('/e-vote/admin/candidate/update/{id}', 'CandidateAdminController@update');
    Route::get('/e-vote/admin/candidate-status/edit/{id}', 'StatusController@edit');
    Route::put('/e-vote/admin/candidate-status/update/{id}', 'StatusController@update');
    Route::get('/e-vote/admin/candidate/delete/{id}', 'CandidateAdminController@delete');
    Route::get('/e-vote/admin/poling', 'PolingController@index');
    Route::get('/e-vote/admin/poling/edit/{id}', 'PolingController@edit');
    Route::put('/e-vote/admin/poling/update/{id}', 'PolingController@update');
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
    Route::get('/e-vote/admin/community/delete/{id}', 'CommunityController@delete');
    Route::get('/e-vote/admin/sponsor', 'SponsorController@index');
    Route::get('/e-vote/admin/sponsor/add', 'SponsorController@add');
    Route::post('/e-vote/admin/sponsor/store', 'SponsorController@store');
    Route::get('/e-vote/admin/sponsor/edit/{id}', 'SponsorController@edit');
    Route::put('/e-vote/admin/sponsor/update/{id}', 'SponsorController@update');
    Route::get('/e-vote/admin/sponsor/delete/{id}', 'SponsorController@delete');
    Route::get('/e-vote/admin/quick-count', 'QuickCountController@index');
    Route::get('/e-vote/admin/vote', 'VoteAdminController@index');
    Route::get('/e-vote/admin/vote/delete/{id}', 'VoteAdminController@delete');
    Route::post('/e-vote/admin/community/import-excel', 'ImportCommunityController@import_excel');
    Route::get('/e-vote/admin/community/import', 'ImportCommunityController@import');
    Route::resource('/e-vote/admin/generate', 'Generate_codeController');
});



Route::group(['middleware' => 'user'], function () {
});

Route::get('/e-vote/user', 'HomeController@index')->name('home');


Route::get('/e-vote/user/candidate/{candidate}', 'CandidateUserController@candidate');

Route::get('/e-vote/user/quick', 'QuickUserController@index');

Route::post('/e-vote/user/validate', 'ValidasiController@store');

Route::get('/e-vote/user/candidate/register', 'CandidateUserController@register');

Route::post('/e-vote/user/candidate/store', 'CandidateUserController@store');

    Route::get('e-vote/user/syarat', function () {
        return view('frontend/syarat');
    });
    // Route::get('e-vote/user/registrasi', function () {
    //         return view('frontend/registrasi');
    // });

    Route::get('e-vote/user/visi1', function () {
        return view('frontend/visi1');
    });

Route::get('/e-vote/candidate/register', 'CandidateUserController@register')->name('registrasi');

Route::post('/e-vote/candidate/store', 'CandidateUserController@store');

Route::get('/home', 'HomeController@index')->name('home');
