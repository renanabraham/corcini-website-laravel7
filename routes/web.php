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
Route::get('/', 'SiteController@home');
Route::get('/servicos/{slug}/{id}', 'SiteController@services')->name('catMaster');
Route::get('/servico/{slug}', 'SiteController@service');
Route::get('/sobre', 'SiteController@profile');
Route::get('/contato', 'SiteController@contact');

//ADMIN
Route::prefix('admin')->group(function () {
    //ADMIN DASHBOARD
    Route::get('/', 'Admin\HomeController@index');

    //CATEGORIAS
    Route::get('/category/create', 'Admin\CategoryController@create');
    Route::post('/category/store', 'Admin\CategoryController@store');
    Route::get('/category/edit/{id}', 'Admin\CategoryController@edit');
    Route::post('/category/update/{id}', 'Admin\CategoryController@update');
    Route::get('/category/delete/{id}', 'Admin\CategoryController@destroy');
    //deleta as imagens na edição de categoria
    Route::get('/category/delimage1/{id}', 'Admin\CategoryController@deleteImage1');
    Route::get('/category/delimage2/{id}', 'Admin\CategoryController@deleteImage2');

    //SERVICES
    Route::get('/service/create', 'Admin\ServiceController@create');
    Route::post('/service/store', 'Admin\ServiceController@store');
    Route::get('/service/edit/{id}', 'Admin\ServiceController@edit');
    Route::post('/service/update/{id}', 'Admin\ServiceController@update');
    Route::get('/service/delete/{id}', 'Admin\ServiceController@destroy');
    //deleta as imagens na edição de serviços
    Route::get('/service/delimage1/{id}', 'Admin\ServiceController@deleteImage1');
    Route::get('/service/delimage2/{id}', 'Admin\ServiceController@deleteImage2');

    //ADDRESS
    Route::get('/addr/create', 'Admin\AddrController@create');
    Route::post('/addr/store', 'Admin\AddrController@store');
    Route::get('/addr/edit/{id}', 'Admin\AddrController@edit');
    Route::post('/addr/update/{id}', 'Admin\AddrController@update');
    Route::get('/addr/delete/{id}', 'Admin\AddrController@destroy');

    //PROFILE
    Route::get('/profile/edit/{id}', 'Admin\ProfileController@edit');
    Route::post('/profile/update/{id}', 'Admin\ProfileController@update');
    //################################################################################################################
});


Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');
