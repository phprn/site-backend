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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->namespace('Site')->group(function () {
    Route::get('/', function () {
        return redirect()->route('home');
    });
    Route::resource('information', 'InformationController');
    Route::resource('events', 'EventController');
    Route::resource('members', 'MemberController')->except('show');
    Route::resource('partners', 'PartnerController')->except(['show', 'edit', 'update']);
});
