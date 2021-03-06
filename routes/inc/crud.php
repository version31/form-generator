<?php

/*
|--------------------------------------------------------------------------
| Ready to use
|--------------------------------------------------------------------------
*/


Route::resource('menu', 'MenuController');
Route::resource('languages', 'LanguageController');

Route::resource('answers', 'AnswerController');

Route::resource('forms', 'FormController');
Route::get('forms/{slug}/view', 'FormController@view');
Route::get('forms/{id}/fields', 'FormController@fields');
Route::resource('fields', 'FieldController');
Route::resource('options', 'OptionController');
Route::resource('types', 'TypeController');
Route::resource('languages', 'LanguageController');
