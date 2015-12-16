<?php

Route::get('/', ['middleware' => 'auth', 'uses' => 'HomeController@showHome']);
Route::get('/terms', 'HomeController@showTerms');

Route::get('/api/users', 'UserController@getUsers');

Route::post('/api/nudges/{receiver_id}', 'NudgeController@createNudge');
Route::get('/api/nudges', 'NudgeController@getNudges');

Route::controllers([
    'auth' => 'Auth\AuthController'
]);
