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
    return view('index');
});

Route::get('listvoyages', function () {
    return view('voyages');
});

Route::get('show/{id_voyage}', function ($id_voyage) {
    return view('show',['id' => $id_voyage]);
})->name('show');

/*
Route::get('voyages/{id_voyage?}', function ($id_voyage = null) {
    if ($id_voyage) {
        return view('voyages/{id_voyage}');
    }return view('voyages/{id_voyage}');
    
})->where('id_voyage',	'[0-9]+');*/


Route::get('a_propos', function () {
    return view('a_propos');
});

Route::get('about', 'StaticPageController@about');

Route::get('hotel-room', function () {
    return view('hotel-room');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('voyages', function () {
        return view('voyages');
    });
    Route::get('users', function () {
        return view('users');
    });
});

Route::get('formsearch', function() {
    return view('recherche');
});

Route::get('search', 'VoyageController@search');


/* SECTION ADMIN */

Route::get('Voyage', function () {
    return view('admin/index');
});

Route::get('admin/ajouter', function () {
    return view('admin/ajouter');
});

Route::resource('voyages','VoyageController');

//Route::resource(‘posts’,’PostController’,	[‘except’	=>	[‘destroy’]]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Middleware
// Contrôler l'accès à certaines routes pour les personnes authentifiées
Route::get('/reservation/{voyage}', 'VoyageController@reservation')->middleware('auth');

// Contrôler l'accès à certaines routes pour les personnes non authentifiées
Route::get('about', 'StaticPageController@about')->middleware('guest');