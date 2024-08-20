<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('lien-he','ClientBlogController@contact');

Route::get('logins.html','ClientIndexController@loginn');
Route::get('login.html','ClientIndexController@user_login');
Route::get('register.html', 'ClientIndexController@getRegister');
Route::post('registers.html', 'ClientIndexController@postRegister');
Route::get('tin-tuc','ClientBlogController@list');
Route::get('search','ClientProductController@search')->name('search.product');

//Menus
Route::get('menu/lists', 'AdminMenuController@index')->name('list.menu');
Route::get('menu/add','AdminMenuController@menuAdd')->name('add.menu');
Route::post('menu/store','AdminMenuController@menuStore')->name('store.menu');
Route::get('menu/edit/{id}', 'AdminMenuController@menuEdit')->name('edit.menu');
Route::post('menu/update/{id}','AdminMenuController@menuUpdate')->name('update.menu');
Route::get('menu/delete/{id}','AdminMenuController@menuDelete')->name('delete.menu');
//Products
Route::get('product/lists', 'AdminProductController@index')->name('list.product');
Route::get('product/add','AdminProductController@productAdd')->name('add.product');
Route::post('product/store','AdminProductController@productStore')->name('store.product');
Route::get('product/edit/{id}', 'AdminProductController@productEdit')->name('edit.product');
Route::post('product/update/{id}','AdminProductController@productUpdate')->name('update.product');
Route::get('product/delete/{id}','AdminProductController@productDelete')->name('delete.product');
//Sliders
Route::get('slider/lists', 'AdminSliderController@index')->name('list.slider');
Route::get('slider/add','AdminSliderController@sliderAdd')->name('add.slider');
Route::post('slider/store','AdminSliderController@sliderStore')->name('store.slider');
Route::get('slider/edit/{id}', 'AdminSliderController@sliderEdit')->name('edit.slider');
Route::post('slider/update/{id}','AdminSliderController@sliderUpdate')->name('update.slider');
Route::get('slider/delete/{id}','AdminSliderController@sliderDelete')->name('delete.slider');
//PAGES
Route::get('page/lists', 'AdminPageController@index')->name('list.page');
Route::get('page/add','AdminPageController@pageAdd')->name('add.page');
Route::post('page/store','AdminPageController@pageStore')->name('store.page');
Route::get('page/edit/{id}', 'AdminPageController@pageEdit')->name('edit.page');
Route::post('page/update/{id}','AdminPageController@pageUpdate')->name('update.page');
Route::get('page/delete/{id}','AdminPageController@pageDelete')->name('delete.page');

//USERS
Route::get('user/lists', 'AdminSliderController@indexSlider')->name('list.user');
Route::get('user/add','AdminSliderController@userAdd')->name('add.user');
Route::post('user/store','AdminSliderController@userStore')->name('store.user');
Route::get('user/edit/{id}', 'AdminSliderController@userEdit')->name('edit.user');
Route::post('user/update/{id}','AdminSliderController@userUpdate')->name('update.user');
Route::get('user/delete/{id}','AdminSliderController@userDelete')->name('delete.user');
Route::get('logout','AdminDashboardController@logout')->name('logout');


Route::get('/', 'ClientIndexController@index')->name('index');
Route::get('blog','ClientBlogController@index');
Route::get('about','ClientBlogController@about');
Route::get('contact','ClientBlogController@contact');
Route::get('san-pham/{slug}','ClientProductController@detail');

Route::get('{slug}','ClientProductController@product');
Route::get('them-san-pham/{id}','ClientProductController@add_to_cart');

Auth::routes();
Route::get('/home', 'AdminDashboardController@index')->name('home');
Route::get('post/lists', 'AdminPostController@index')->name('lists');
Route::get('post/add','AdminPostController@add')->name('add');
Route::post('post/store','AdminPostController@store')->name('store');
Route::get('post/edit/{id}', 'AdminPostController@edit')->name('edit');
Route::post('post/update/{id}','AdminPostController@update')->name('update');
Route::get('poste/delete/{id}','AdminPostController@delete')->name('delete');
Route::get('features.html','ClientIndexController@features');
Route::get('xoa-san-pham/{rowId}','ClientProductController@deleteCart');
Route::get('checkout','ClientProductController@checkout');
Route::get('tin-tuc','ClientBlogController@post');

Route::get('chi-tiet-bai-viet/{slug}','ClientBlogController@detail');
Route::get('shop','ClientProductController@shop')->name('shop');
Route::get('chi-tiet-san-pham/{slug}','ClientProductController@detail')->name('detail');
Route::get('gio-hang.html','ClientProductController@cart')->name('cart');
Route::get('cart-pay/cart.html','ClientProductController@shopping');

