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

//Route::get('voyages', function () {
//    return view('voyages');
//});

Route::get('voyages/{id_voyage?}', function ($id_voyage = null) {
    return "view('voyages')";
})->where('id_voyage',	'[0-9]+');

Route::get('a_propos', function () {
    return view('a_propos');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('voyages', function () {
        return view('voyages');
    });
    Route::get('users', function () {
        return view('users');
    });
});