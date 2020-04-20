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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/requirement', 'HomeController@requirement')->name('requirement');
Route::get('/analysis', 'HomeController@analysis')->name('analysis');
Route::get('/design', 'HomeController@design')->name('design');
Route::get('/maintanance', 'HomeController@maintanance')->name('maintanance');
Route::get('/set_session/{id}', 'HomeController@set_session')->name('set_session');

Route::get('/project', 'HomeController@project')->name('project');
Route::get('project/create', [
    'as' => 'project.create', 'uses' => 'HomeController@project_create'
]);
Route::post('project/postcreate', [
    'as' => 'project.postcreate', 'uses' => 'HomeController@project_postcreate'
]);


Route::get('requirement/create', [
    'as' => 'requirement.create', 'uses' => 'HomeController@requirement_create'
]);
Route::post('requirement/postcreate', [
    'as' => 'requirement.postcreate', 'uses' => 'HomeController@requirement_postcreate'
]);


Route::get('design/create', [
    'as' => 'design.create', 'uses' => 'HomeController@design_create'
]);
Route::post('design/postcreate', [
    'as' => 'design.postcreate', 'uses' => 'HomeController@design_postcreate'
]);

Route::get('/implementation', 'HomeController@implementation')->name('implementation');
Route::get('implementation/create', [
    'as' => 'implementation.create', 'uses' => 'HomeController@implementation_create'
]);
Route::post('implementation/postcreate', [
    'as' => 'implementation.postcreate', 'uses' => 'HomeController@implementation_postcreate'
]);

Route::get('/user', 'HomeController@user')->name('user');

Route::get('/developer', 'HomeController@developer')->name('developer');
Route::get('developer/create', [
    'as' => 'developer.create', 'uses' => 'HomeController@developer_create'
]);
Route::post('developer/postcreate', [
    'as' => 'developer.postcreate', 'uses' => 'HomeController@developer_postcreate'
]);

Route::get('/testing', 'HomeController@testing')->name('testing');
Route::get('testing/create', [
    'as' => 'testing.create', 'uses' => 'HomeController@testing_create'
]);
Route::post('testing/postcreate', [
    'as' => 'testing.postcreate', 'uses' => 'HomeController@testing_postcreate'
]);

Route::get('/design_type', 'HomeController@design_type')->name('design_type');
Route::get('design_type/create', [
    'as' => 'design_type.create', 'uses' => 'HomeController@design_type_create'
]);
Route::post('design_type/postcreate', [
    'as' => 'design_type.postcreate', 'uses' => 'HomeController@design_type_postcreate'
]);