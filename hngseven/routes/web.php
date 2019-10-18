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

//Route::get('/', function () {
//    return view('frontend.frontend.index');
//});
Route::get('/', 'BaseController@index')->name('index');

Route::get('/signup', 'BaseController@register')->name('signup');
Route::get('/signin', 'BaseController@login')->name('signin');
Route::get('/admin', 'BaseController@admin')->name('admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 *
 * Admin Routes
 */

Route::get('/course', 'CourseController@show')->name('courses');
Route::get('/course/disable/{id}', 'CourseController@destroy')->name('course.disable');
Route::get('/course/create', 'CourseController@create')->name('course.create');
Route::get('/course/{id}', 'CourseController@course')->name('course.details');
Route::post('/course', 'CourseController@store')->name('course.store');

Route::get('/users', 'UserController@show')->name('users');
Route::get('/user/disable/admin/{id}', 'UserController@disableAdmin')->name('user.disableAdmin');
Route::get('/user/disable/{id}', 'UserController@destroy')->name('user.disable');
Route::get('/users/{id}', 'UserController@user')->name('user.details');

Route::get('/about', 'BaseController@about')->name('about');
Route::get('/graduates', 'BaseController@hire')->name('hire');
Route::get('/contact', 'BaseController@contact')->name('contact');
Route::get('/courses/index', 'BaseController@courses')->name('courses.index');

Route::get('/register-course/{id}', 'BaseController@registerCourses')->name('register.courses');
Route::get('/course-details/{id}', 'BaseController@details')->name('details');