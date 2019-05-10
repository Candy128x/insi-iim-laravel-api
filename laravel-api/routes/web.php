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


Route::post('/hello',function(){
    return 'Hello Developer :]';
});


// Route::any('fetch_feeds_from_twitter', 'FetchFeedsFromTwitterController@getData')->middleware('permission:fetch_feeds_from_twitter')->name('fetch_feeds_from_twitter.get_data');

// Route::any('/fetch_feeds_from_twitter', 'FetchFeedsFromTwitterController@getData')
// ->name('fetch_feeds_from_twitter.get_data');

Route::any('/fetch_feeds_from_domain', 'FetchFeedsFromDomainController@make')
->name('fetch_feeds_from_domain.get_data');