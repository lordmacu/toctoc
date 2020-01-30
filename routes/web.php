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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('tasks', 'TaskController');


Route::resource('admin/providers', 'Admin\\ProvidersController');
Route::post('/providers/getAllProviders', 'Admin\\ProvidersController@getAllProviders')->name('getAllProviders');
Route::post('/providers/addProviderProject', 'Admin\\ProvidersController@addProviderProject')->name('addProviderProject');
Route::post('/providers/deleteProviderProject', 'Admin\\ProvidersController@deleteProviderProject')->name('deleteProviderProject');

Route::resource('admin/contacts', 'Admin\\ContactsController');
Route::resource('admin/news', 'Admin\\NewsController');
Route::resource('admin/projects', 'Admin\\ProjectsController');

Route::resource('admin/surveys', 'Admin\\SurveysController');
Route::post('/surveys/getAllProviders', 'Admin\\SurveysController@getAllProviders')->name('getAllProviders');
Route::post('/surveys/addQuestionSurvey', 'Admin\\SurveysController@addQuestionSurvey')->name('addQuestionSurvey');
Route::post('/surveys/deleteQuestionSurvey', 'Admin\\SurveysController@deleteQuestionSurvey')->name('deleteQuestionSurvey');


Route::resource('admin/forums', 'Admin\\ForumsController');
Route::resource('admin/anounces', 'Admin\\AnouncesController');
Route::resource('admin/tickets', 'Admin\\TicketsController');
Route::resource('admin/meetings', 'Admin\\MeetingsController');
Route::resource('admin/rooms', 'Admin\\RoomsController');
Route::resource('admin/inventories', 'Admin\\InventoriesController');
Route::resource('admin/maintenances', 'Admin\\MaintenancesController');
Route::resource('admin/inventaries', 'Admin\\InventariesController');
Route::resource('admin/documents', 'Admin\\DocumentsController');