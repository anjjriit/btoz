<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', ['uses' => 'SkrdController@index']);

Route::resource('skrd', 'SkrdController');
Route::get('skrd/{id}/pdf', ['as' => 'skrd.pdf', 'uses' => 'SkrdController@getPdf']);
//Route::controller('skrd', 'SkrdController');


Route::controller('', 'SiteController',
    [
        'getLogin'   => 'site.login',
        'postLogout' => 'site.logout',
        'getForgotPassword' => 'site.forgot_password',
        'postForgotPassword' => 'site.forgot_password',
    ]
);

