<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/About', function () {
    return view('index');
})->name('index');
Route::get('/an', function () {
    return view('test');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('notuser');

Route::get('/annonces/create', 'AnnonceController@create')->name('annonces.create')->middleware('notuser');
Route::post('/annonces', 'AnnonceController@store')->name('annonces.store')->middleware('notuser');
Route::get('/', 'AnnonceController@index')->name('annonces.index');
Route::get('/annonces/{id}', 'AnnonceController@show')->name('annonces.show');

Route::get('/About', 'ContactController@create');
Route::post('/About', 'ContactController@store')->name('contactstore');

Route::get('/search', 'AnnonceController@search');

//admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('admin/home', 'HomeController@adminHome')->name('admin.home');

    Route::get('/Addcat', 'CategoryController@Addcat')->name('Addcat');
    Route::post('/category', 'CategoryController@store')->name('category');
    Route::get('/Annonceliste', 'AnnonceController@index2')->name('Annonceliste');
    Route::get('/Userlist', 'UserController@index')->name('Userlist');

    Route::get('/listesouscat', 'SousCategoryController@index2')->name('listesouscat');
    Route::get('/listecat', function () {return view('back.listecat');})->name('listecat');
    Route::get('/listemsg', function () {return view('back.listemsg');})->name('listemsg');
    Route::get('/listelocation', function () {return view('back.listelocation');})->name('listelocation');
    Route::get('/category/{id}', 'CategoryController@edit')->name('category.edit');

    Route::put('/category/{id}', 'CategoryController@update')->name('updatecate');
    Route::delete('/category/{id}/delete', 'CategoryController@destroy')->name('category.delete');
    Route::delete('/annonce/{id}/delete', 'AnnonceController@destroy')->name('Annonce.delete');
    Route::delete('/user/{id}/delete', 'UserController@destroy')->name('User.delete');
    Route::get('/souscategory/{id}', 'SousCategoryController@create')->name('souscategory.ajouter');
    Route::post('/souscategory/{id}', 'SousCategoryController@store')->name('souscategory.store');
    Route::put('/listemsg/{id}', 'ContactController@update')->name('contact');

    Route::delete('/souscategory/{id}', 'SousCategoryController@destroy')->name('souscategory.delete');

});
//user
Route::group([ 'middleware' => ['auth', 'notuser']], function () {
    Route::post('/demandes/{id}', 'DemandeController@store')->name('demande.store') ;

    Route::get('/listenotif', 'DemandeController@index')->name('listenotif') ;
    Route::put('/listenotif/{id}/accepter', 'DemandeController@accepter')->name('accept') ;
    Route::put('/listenotif/{id}/ok', 'DemandeController@ok')->name('ok') ;
    Route::put('/listenotif/{id}/okk', 'DemandeController@okk')->name('okk') ;
    Route::put('/listenotif/{id}/oka', 'DemandeController@oka')->name('oka') ;
    Route::put('/listenotif/{id}', 'DemandeController@refuser')->name('refus') ;

    Route::get('/client/{id}', 'DemandeController@indexx')->name('showClient')->middleware('auth');
    Route::get('/listenotiff', function () {return view('annonces.listenotiff');}) ;


    Route::get('/annuler/{id}', 'ReservationController@annuler')->name('annuler') ;
    Route::get('/notez/{annonce}', 'CommentaireController@create')->name('notez') ;
    Route::post('/note/{annonce}', 'CommentaireController@store')->name('note') ;

    Route::get('/notezC/{id}/{annonce}', 'CommentaireClientController@create')->name('notezc') ;
    Route::post('/noteC/{id}/{annonce}', 'CommentaireClientController@store')->name('notec') ;

    Route::get('/mesreservation', function () {return view('annonces.reservation');})->name('reservations') ;


    Route::get('/mesannonces/{id}', function () {return view('user.tableannonce');}) ;
    Route::get('/dash', function () {return view('user.maindash');}) ;
    Route::get('/modifiercompte/{id}', 'UserController@edit')->name('profile') ;
    Route::put('/modifiercompte/{id}/update', 'UserController@update')->name('updateuser') ;

    Route::get('/modifierannonce/{id}', 'AnnonceController@edit')->name('annonce') ;
    Route::put('/modifierannonce/{id}/update', 'AnnonceController@update')->name('updateannonce') ;

    Route::get('/image', 'UserController@editimg')->name('image') ;
    Route::post('/image', 'UserController@updateimg')->name('imageupdate') ;

    Route::get('/user/{id}', 'UserController@showuser')->name('user.maindash') ;

    Route::get('/changepas', 'UserController@changepas')->name('changepas') ;
    Route::post('/change', 'UserController@change')->name('change') ;

});
Route::delete('/annonce/{id}/delete', 'AnnonceController@destroy')->name('Annonce.delete')->middleware('auth');

Route::get('/categorie/{nom}', 'AnnonceController@list')->name('listbycat');
