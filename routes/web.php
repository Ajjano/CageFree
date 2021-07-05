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

Route::get('/', 'HomeController@index')->name('main');
Route::get('/blog/post/{id}', 'HomeController@showPost')->name('post.show');
Route::get('/blog123', 'HomeController@showBlog')->name('blog.show');
Route::post('/blog/search', 'HomeController@searchBlog')->name('blog.search');

Route::get('/login', 'AuthController@loginForm');
Route::post('/login', 'AuthController@login');

Route::get('/logout', 'AuthController@logout')->name('logout');

Route::group(['prefix'=>'admin','namespace'=>'Admin', 'middleware'=>'admin'], function(){
    Route::get('/index', 'DashboardController@index')->name('admin.main');
    Route::post('/change-header', 'DashboardController@changeHeader')->name('change-header');
    Route::post('/change-our-activities', 'DashboardController@changeOurActivities')->name('change-our-activities');
    Route::post('/change-battery-system', 'DashboardController@changeBatterySystem')->name('change-battery-system');
    Route::post('/change-blog', 'DashboardController@changeBlog')->name('change-blog');
    Route::post('/change-contacts', 'DashboardController@changeContacts')->name('change-contacts');
    Route::post('/change-petitions', 'DashboardController@changePetitions')->name('change-petitions');
    Route::post('/ckeditor', 'PostController@ckeditorUploadImage')->name('ckeditor-upload');
    Route::resource('/posts', 'PostController');
    Route::resource('/petitions', 'PetitionController');
    Route::resource('/battery-system', 'BatterySystemController');
    Route::resource('/contacts', 'ContactController');
    Route::resource('/our-activities', 'OurActivityController');



});
