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

//Index
Route::group(['middleware' => 'web'], function () {
	Route::get('/', 'HomePageController@showHome');
});

//Login & Logout & forgot password
Route::group(['middleware' => 'web'], function () {
	Route::get('/account/login', 'LoginPageController@showLoginfrontend');
	Route::post('/account/login', 'LoginPageController@frontEndLogin');
	Route::get('/account/logout', 'LoginPageController@logoutfrontend');

	Route::get('/account/forgotpassword', 'LoginPageController@showforgotpassword');


});

//Daftar
Route::group(['middleware' => 'web'], function () {
	Route::get('/account/daftar', 'AccountController@showRegisterForm');
	Route::post('/account/daftar', 'AccountController@register');
});

//Contact
Route::group(['middleware' => 'web'], function () {
	Route::get('/company/contact', 'ContactController@showContactForm');
	Route::post('/company/contact', 'ContactController@sendEmail');

});

//Static Content
Route::group(['middleware' => 'web'], function () {
	Route::get('/company/about', 'StaticContentController@showAbout');

	Route::get('/bantuan/privacy', 'StaticContentController@showPrivacy');
	Route::get('/bantuan/policy', 'StaticContentController@showPolicy');

});

//Profile
Route::group(['middleware' => 'web'], function () {
	Route::get('/profile/{username}', 'ProfileController@memberProfile');
	Route::get('/profile/{username}/edit', 'ProfileController@editProfile');

	
	Route::post('/profile/update', array('uses' => 'ProfileController@update'));	


	Route::post('/article/add', array('uses' => 'ArticleController@store'));
	Route::get('/article/add', 'ArticleController@add');
	
});


//Follow
Route::group(['middleware' => 'web'], function () {
	Route::post('/member/follow','AccountController@follow');
});
