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
	
	$noms = DB::select('select * from test');
    return view('home/home')->withNoms($noms);

});

Route::resource('categories', 'CategoriesController');
Route::resource('commentaires', 'CommentairesController');
Route::resource('evenements', 'EvenementsController');
Route::resource('photos', 'PhotosController');
Route::resource('produits', 'ProduitsController');
Route::resource('utilisateurs', 'UtilisateursController');
