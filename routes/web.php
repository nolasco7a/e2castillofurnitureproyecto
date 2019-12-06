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

Route::get('/', 'indexController@index')->name('index');

Route::get('/services', 'servicesController@service')->name('service');

Route::get('/project', 'projectsController@project')->name('project');

Route::get('/about', 'aboutController@about')->name('about');

Route::get('/contact', 'contactController@contact')->name('contact');

Route::get('/melamines', 'melaminesController@melamines')->name('melamines');

Route::post('/sendemail', 'contactController@sendEmail');

Route::get('/emailsent', function(){
    return view('mail.emailSent');
});

Route::get('elements', function(){
    return view('elements');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
