<?php
// Definim les rutes
return [
    '/' => 'App\Controllers\HomeController@index',
    '/home' => 'App\Controllers\HomeController@index',
    '/films' => 'App\Controllers\FilmController@index',
    '/films/create' => 'App\Controllers\FilmController@create',
    '/films/store' => 'App\Controllers\FilmController@store',
    '/films/edit' => 'App\Controllers\FilmController@edit',
    '/films/update' => 'App\Controllers\FilmController@update',
    '/films/delete' => 'App\Controllers\FilmController@delete',
    '/films/destroy' => 'App\Controllers\FilmController@destroy',
    '/cars' => 'App\Controllers\CarController@index',
    '/cars/create' => 'App\Controllers\CarController@create',
    '/cars/store' => 'App\Controllers\CarController@store',
    '/cars/edit' => 'App\Controllers\CarController@edit',
    '/cars/update' => 'App\Controllers\CarController@update',
    '/cars/delete' => 'App\Controllers\CarController@delete',
    '/cars/destroy' => 'App\Controllers\CarController@destroy',
];