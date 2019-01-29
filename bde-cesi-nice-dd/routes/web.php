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

/*
Route::get('/', function () {
	$noms = DB::select('select * from test');
    return view('home/home')->withNoms($noms);
});
*/


Route::get('/login',function(){
    return View::make('home/login');
});

Route::get('/signin',function(){
    return View::make('home/signin');
});

Route::get('/',function(){
    if(Auth::guest()){
        return View::make('home/home');
    }
    return View::make('home/home');
});


Route::get('/box',function(){
    return View::make('home/box');
});

Route::get('/ajout_photos',function(){
    return View::make('home/ajout_photos');
});

Route::get('/create_event',function(){
    return View::make('home/create_event');
});

Route::get('/create_article',function(){
    return View::make('home/create_article');
});

Route::get('/create_idea',function(){
    return View::make('home/create_idea');
});

Route::get('/compte',function(){
    return View::make('home/compte');
});

Route::get('/event',function(){
    return View::make('home/event');
});

Route::get('/picture',function(){
    return View::make('home/picture');
});

Route::get('/shop',function(){
    return View::make('home/shop');
});

Route::get('/home',function(){
    return View::make('home/home');
});

Route::get('/cart',function(){
    return View::make('home/cart');
});

Route::get('/contact',function(){
    return View::make('home/contact');
});

Route::get('/forget',function(){
    return View::make('home/forget');
});

Route::resource('categories', 'CategoriesController');
Route::resource('commentaires', 'CommentairesController');
Route::resource('evenements', 'EvenementsController');
Route::resource('photos', 'PhotosController');
Route::resource('produits', 'ProduitsController');
Route::resource('utilisateurs', 'UtilisateursController');
Route::resource('test', 'TestController');

/*
Route::get('categories', 'CategoriesController@getForm');
Route::post('categories', ['uses' => 'CategoriesController@postForm', 'as' => 'storeCategorie']);

Route::get('commentaires', 'CommentairesController@getForm');
Route::post('commentaires', ['uses' => 'CommentairesController@postForm', 'as' => 'storeCommentaire']);

Route::get('evenements', 'EvenementsController@getForm');
Route::post('evenements', ['uses' => 'EvenementsController@postForm', 'as' => 'storeEvenement']);

Route::get('photos', 'PhotosController@getForm');
Route::post('photos', ['uses' => 'PhotosController@postForm', 'as' => 'storePhoto']);

Route::get('produits', 'ProduitsController@getForm');
Route::post('produits', ['uses' => 'ProduitsController@postForm', 'as' => 'storeProduit']);

Route::get('utilisateurs', 'UtilisateursController@getForm');
Route::post('utilisateurs', ['uses' => 'UtilisateursController@postForm', 'as' => 'storeUtilisateur']);

Route::get('test', 'TestController@getForm');
Route::post('test', ['uses' => 'TestController@postForm', 'as' => 'storeTest']);
*/