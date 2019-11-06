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

Route::get('/', 'PageControl@home');
Route::get('/adminHome', 'PageControl@adminHome');
Route::get('/adminLogin', 'PageControl@adminLogin');
Route::get('/candidateHome', 'PageControl@candidateHome');
Route::get('/candidateLogin', 'PageControl@candidateLogin');
Route::get('/candidateRegistration', 'PageControl@candidateRegistration');
Route::get('/employerHome', 'PageControl@employerHome');
Route::get('/employerLogin', 'PageControl@employerLogin');
Route::get('/employerRegistration', 'PageControl@employerRegistration');
Route::get('/us', 'PageControl@us');
Route::post('/employee_register', 'EmployerController@store');
Route::post('/employee_login', 'EmployerController@authenticate');
Route::post('/admin_login', 'AdminController@authenticate');
Route::get('/employerInfo', 'EmployerController@show');
Route::get('/employerCompany', 'CompanyController@show');
Route::get('/new_job_post', 'JobController@job_post');
Route::post('/job_post', 'JobController@store');
Route::get('/all_job', 'JobController@index');
