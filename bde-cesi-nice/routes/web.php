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

//Gestion de l'authentification
Auth::routes();

<<<<<<< HEAD
//HOME -> Accessible par tous le monde
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
=======
Route::get('create','zipController@create');
//HOME -> Accessible par tous le monde
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/live_search', 'LiveSearch@index');
Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');

Route::get('/pagination', 'PaginationController@index');
Route::get('pagination/fetch_data', 'PaginationController@fetch_data');

Route::get('/filter', 'FilterController@index');
Route::get('/filter/action', 'FilterController@action')->name('filter.action');
>>>>>>> master

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////    Liste les routes des différents contrôlleurs avec contrôle d'authentification   ////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

//Utilisateurs
Route::resource('utilisateurs', 'UserController')->middleware('auth');

<<<<<<< HEAD
=======




>>>>>>> master
//Evenements
Route::resource('evenements', 'EvenementsController')->middleware('auth');
Route::get('/evenements/{n}/export', ['uses' => 'EvenementsController@export_users_registered', 'as' => 'export'])->where('n', '[0-9]+')->middleware('auth');

<<<<<<< HEAD
Route::get('evenements/participation/{n}', ['uses' => 'EvenementsController@participation_evenement_by_user', 'as' => 'evenements.participation'])->where('n', '[0-9]+')->middleware('auth');

=======
>>>>>>> master
Route::get('/create_event',function(){
    return View::make('Evenements/create_event');
})->middleware('auth');

Route::get('/event',function(){
    return View::make('Evenements/event');
})->middleware('auth');

<<<<<<< HEAD
//Boite à idées
Route::resource('box', 'BoxController')->middleware('auth');

Route::get('box/vote/{n}', ['uses' => 'BoxController@vote_evenement_by_user', 'as' => 'box.vote'])->where('n', '[0-9]+')->middleware('auth');

=======
Route::get('/pass_event',function(){
    return View::make('home/pass_event');
})->middleware('auth');








//Boite à idées
Route::resource('box', 'BoxController')->middleware('auth');

>>>>>>> master
Route::get('/create_idea',function(){
    return View::make('Idees/create_idea');
})->middleware('auth');

<<<<<<< HEAD
//Photos
Route::resource('photos', 'PhotosController')->middleware('auth');
Route::resource('commentaires', 'CommentairesController')->middleware('auth');
Route::get('gestion',['as'=>'gestion','uses'=>'PhotosController@management_photo'])->middleware('auth');
Route::get('image-upload',['as'=>'image.upload','uses'=>'ImageUploadController@imageUpload'])->middleware('auth');
Route::post('image-upload',['as'=>'image.upload.post','uses'=>'ImageUploadController@imageUploadPost'])->middleware('auth');
=======







//Photos
Route::resource('photos', 'PhotosController')->middleware('auth');
Route::resource('commentaires', 'CommentairesController')->middleware('auth');

Route::get('image-upload',['as'=>'image.upload','uses'=>'ImageUploadController@imageUpload']);
Route::post('image-upload',['as'=>'image.upload.post','uses'=>'ImageUploadController@imageUploadPost']);
>>>>>>> master

Route::get('/ajout_photos',function(){
    return View::make('Photos/ajout_photos');
})->middleware('auth');

<<<<<<< HEAD
=======
Route::resource('imgup', 'ImageUploadController');
>>>>>>> master
Route::get('/imageUpload',function(){
    return View::make('Photos/imageUpload');
});

Route::get('/picture',function(){
    return View::make('Photos/picture');
})->middleware('auth');

<<<<<<< HEAD
Route::get('like/{n}',['uses' => 'PhotosController@like_photo', 'as' => 'like'])->where('n', '[0-9]+')->middleware('auth');
Route::get('photos/add_commentaire/{n}',['as'=>'add_commentaire','uses'=>'CommentairesController@create_com_photo'])->where('n', '[0-9]+')->middleware('auth');
=======









>>>>>>> master

//Boutique
Route::resource('shop', 'ProduitsController')->middleware('auth');
Route::resource('categories', 'CategoriesController')->middleware('auth');

Route::get('shop/add/{n}', ['uses' => 'ProduitsController@add_to_cart', 'as' => 'shop.add'])->where('n', '[0-9]+')->middleware('auth');
Route::get('cart/delete/{n}', ['uses' => 'ProduitsController@delete_to_cart', 'as' => 'shop.delete'])->where('n', '[0-9]+')->middleware('auth');

Route::get('cart','ProduitsController@cart')->middleware('auth');

<<<<<<< HEAD
Route::get('checkout', ['uses' => 'ProduitsController@checkout', 'as' => 'shop.checkout'])->middleware('auth');

=======
>>>>>>> master
Route::get('/create_article',function(){
    return View::make('Boutique/Produits/create_article');
})->middleware('auth');

Route::get('/gestion_article',function(){
    return View::make('Boutique/Produits/gestion_article');
});
Route::get('/edit_article',function(){
    return View::make('Boutique/Produits/edit_article');
});
Route::get('/delete_article',function(){
    return View::make('Boutique/Produits/delete_article');
});

<<<<<<< HEAD
=======



>>>>>>> master
//Divers
Route::get('/compte',function(){
    return View::make('MonCompte/compte');
})->middleware('auth');

Route::get('/contact',function(){
    return View::make('Contact/contact');
})->middleware('auth');

Route::get('/login2',function(){
    return View::make('Home/login_deprecated');
});

Route::get('/signin2',function(){
    return View::make('Home/signin_deprecated');
});

Route::get('/forget2',function(){
    return View::make('Home/forget_deprecated');
});
<<<<<<< HEAD

=======
Route::get('/legal',function(){
    return View::make('home/legal');
});
>>>>>>> master
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////