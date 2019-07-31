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

Route::get('/','dashboardController@index');


Route::group(['prefix'=>'blog'],function()
{
    Route::get('/',  'blogController@index' );
    Route::get('/{url}',  'blogController@postRequest' );

});

Route::group(['prefix'=>'resources'],function()
{
    Route::get('/',  'resourcesController@index' );
    Route::get('/constancia', 'resourcesController@getConstancia');
    Route::get('/schedule', 'resourcesController@getSchedule');
    Route::get('/library', 'resourcesController@getLibrary');
});

Route::group(['prefix'=>'events'],function()
{
    Route::get('/',  'eventsController@index' );
});

Route::group(['prefix'=>'research'],function()
{
    Route::get('/',  'researchController@index' );
});
