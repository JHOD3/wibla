<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Intervention\Image\ImageManagerStatic as Image;
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

Route::get('/cache', function () {
    Artisan::call('cache:clear');
    // Artisan::call('route:cache');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    return 'Exito';
});

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'PageController@index');
    Route::get('/thanks', 'PageController@thanks');
    Route::get('governmental','PageController@organismsGovernmental')->name('governmental');
    Route::get('educative','PageController@organismsEducative')->name('educative');
    Route::get('business','PageController@organismsBusiness')->name('business');
    Route::get('contact/{product?}','PageController@contact')->name('contact');
    Route::post('sendContact','PageController@sendContact')->name('sendContact');
    Route::get('faqs','PageController@faqs')->name('faqs');
    Route::get('aboutUs','PageController@aboutUs')->name('aboutUs');
    Route::get('product_list','PageController@productList')->name('product_list');
    Route::post('ajaxSearch','PageController@ajaxSearch')->name('ajaxSearch');
    Route::get('product_detail/{slug}','PageController@productDetail')->name('product_detail');
    Route::group(['middleware' => ['auth'], 'prefix'=>'admin'], function () {
        Route::get('inicio', 'InicioController@index')->name('inicio');
        Route::resource('roles', 'RolesController');
        Route::resource('permissions', 'PermissionsController');
        Route::resource('users', 'UserController');
    });
});
Auth::routes(['verify' => true]);



Route::resource('categories', 'CategoryController');

Route::resource('marks', 'MarkController');

Route::resource('products', 'ProductController');