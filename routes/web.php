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
Route::get('/maintanance', 'HomeController@maintanance')->name('maintanance');
Route::get('/set_session/{id}', 'HomeController@set_session')->name('set_session');

Route::get('/project', 'HomeController@project')->name('project');
Route::get('project/create', [
    'as' => 'project.create', 'uses' => 'HomeController@project_create'
]);
Route::post('project/postcreate', [
    'as' => 'project.postcreate', 'uses' => 'HomeController@project_postcreate'
]);
Route::get('update_project/update/{id}', [
    'as' => 'update_project.update', 'uses' => 'HomeController@update_project_view'
]);
Route::post('update_project/postcreate/{id}', [
    'as' => 'update_project.postcreate', 'uses' => 'HomeController@update_project_postcreate'
]);


// for project status
Route::get('/project_status', 'HomeController@project_status')->name('project_status');
Route::get('project_status/create', [
    'as' => 'project_status.create', 'uses' => 'HomeController@project_status_create'
]);
Route::post('project_status/postcreate', [
    'as' => 'project_status.postcreate', 'uses' => 'HomeController@project_status_postcreate'
]);
Route::get('update_project_status/update/{id}', [
    'as' => 'update_project_status.update', 'uses' => 'HomeController@update_project_status_view'
]);
Route::post('update_project_status/postcreate/{id}', [
    'as' => 'update_project_status.postcreate', 'uses' => 'HomeController@update_project_status_postcreate'
]);



// 
Route::get('requirement/create', [
    'as' => 'requirement.create', 'uses' => 'HomeController@requirement_create'
]);
Route::post('requirement/postcreate', [
    'as' => 'requirement.postcreate', 'uses' => 'HomeController@requirement_postcreate'
]);

Route::get('/design', 'HomeController@design')->name('design');
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

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
});

Route::get('/testing_document_type', 'HomeController@testing_document_type')->name('testing_document_type');
Route::get('testing_document_type/create', [
    'as' => 'testing_document_type.create', 'uses' => 'HomeController@testing_document_type_create'
]);
Route::post('testing_document_type/postcreate', [
    'as' => 'testing_document_type.postcreate', 'uses' => 'HomeController@testing_document_type_postcreate'
]);


Route::get('/server_information', 'HomeController@server_information')->name('server_information');
Route::get('server_information/create', [
    'as' => 'server_information.create', 'uses' => 'HomeController@server_information_create'
]);
Route::post('server_information/postcreate', [
    'as' => 'server_information.postcreate', 'uses' => 'HomeController@server_information_postcreate'
]);


// bast
Route::get('/bast', 'HomeController@bast')->name('bast');
Route::get('bast/create', [
    'as' => 'bast.create', 'uses' => 'HomeController@bast_create'
]);
Route::post('bast/postcreate', [
    'as' => 'bast.postcreate', 'uses' => 'HomeController@bast_postcreate'
]);

// transfer knowledge
Route::get('/transfer_knowledge', 'HomeController@transfer_knowledge')->name('transfer_knowledge');
Route::get('transfer_knowledge/create', [
    'as' => 'transfer_knowledge.create', 'uses' => 'HomeController@transfer_knowledge_create'
]);
Route::post('transfer_knowledge/postcreate', [
    'as' => 'transfer_knowledge.postcreate', 'uses' => 'HomeController@transfer_knowledge_postcreate'
]);