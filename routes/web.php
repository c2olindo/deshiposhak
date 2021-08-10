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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*
 * User Routes
 */
/*Route::get('/', function () {
    return view('front.home');
})->name('home');*/

Route::group(['namespace' => 'User'], function () {
    Route::get('/', 'PagesController@index')->name('home');
    Route::get('/about-us', 'PagesController@about')->name('about-us');
    Route::get('/contact-us', 'PagesController@contact')->name('contact');

    Route::group(['prefix' => 'our-products'], function () {
        Route::get('/', 'ProductController@index')->name('shop');
        Route::get('/{slug}', 'ProductController@product')->name('product');
    });
});

/*
 * Admin Routes
 */
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('dashboard');

    Route::resource('/products', 'ProductController');
    Route::get('admin/product/delete/{id}','ProductController@delete');

    Route::resource('/banners', 'BannerController');
    Route::get('admin/banner/delete/{id}','BannerController@delete');
});
