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

Route::get('/', 'ReminderController@home');
Route::get('/addreminder', 'ReminderController@CreateReminderPage');
Route::post('/reminder/new', 'ReminderController@AddReminder');
Route::get('/reminder/edit/{id}', 'ReminderController@EditReminderPage');
Route::put('/reminder/edited', 'ReminderController@EditReminder');
Route::delete('/reminder/delete', 'ReminderController@deleteReminder');
