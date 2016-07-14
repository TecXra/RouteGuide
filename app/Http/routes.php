<?php

/****************   Model binding into route **************************/
Route::model('article', 'App\Article');
Route::model('articlecategory', 'App\ArticleCategory');
Route::model('language', 'App\Language');
Route::model('photoalbum', 'App\PhotoAlbum');
Route::model('photo', 'App\Photo');
Route::model('user', 'App\User');
Route::pattern('id', '[0-9]+');
Route::pattern('slug', '[0-9a-z-_]+');

/***************    Site routes  **********************************/
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::get('articles', 'ArticlesController@index');
Route::get('article/{slug}', 'ArticlesController@show');
Route::get('video/{id}', 'VideoController@show');
Route::get('photo/{id}', 'PhotoController@show');


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

/***************    Admin routes  **********************************/
    Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    # Admin Dashboard
    Route::get('dashboard', 'Admin\DashboardController@index');
    
    # Language
    Route::get('language/data', 'Admin\LanguageController@data');
    Route::get('language/{language}/show', 'Admin\LanguageController@show');
    Route::get('language/{language}/edit', 'Admin\LanguageController@edit');
    Route::get('language/{language}/delete', 'Admin\LanguageController@delete');
    Route::resource('language', 'Admin\LanguageController');

    # Article category
    Route::get('articlecategory/data', 'Admin\ArticleCategoriesController@data');
    Route::get('articlecategory/{articlecategory}/show', 'Admin\ArticleCategoriesController@show');
    Route::get('articlecategory/{articlecategory}/edit', 'Admin\ArticleCategoriesController@edit');
    Route::get('articlecategory/{articlecategory}/delete', 'Admin\ArticleCategoriesController@delete');
    Route::get('articlecategory/reorder', 'ArticleCategoriesController@getReorder');
    Route::resource('articlecategory', 'Admin\ArticleCategoriesController');

    # Articles
    Route::get('article/data', 'Admin\ArticleController@data');
    Route::get('article/{article}/show', 'Admin\ArticleController@show');
    Route::get('article/{article}/edit', 'Admin\ArticleController@edit');
    Route::get('article/{article}/delete', 'Admin\ArticleController@delete');
    Route::get('article/reorder', 'Admin\ArticleController@getReorder');
    Route::resource('article', 'Admin\ArticleController');

    # Photo Album
    Route::get('photoalbum/data', 'Admin\PhotoAlbumController@data');
    Route::get('photoalbum/{photoalbum}/show', 'Admin\PhotoAlbumController@show');
    Route::get('photoalbum/{photoalbum}/edit', 'Admin\PhotoAlbumController@edit');
    Route::get('photoalbum/{photoalbum}/delete', 'Admin\PhotoAlbumController@delete');
    Route::resource('photoalbum', 'Admin\PhotoAlbumController');

    # Photo
    Route::get('photo/data', 'Admin\PhotoController@data');
    Route::get('photo/{photo}/show', 'Admin\PhotoController@show');
    Route::get('photo/{photo}/edit', 'Admin\PhotoController@edit');
    Route::get('photo/{photo}/delete', 'Admin\PhotoController@delete');
    Route::resource('photo', 'Admin\PhotoController');

    # Users
    Route::get('user/data', 'Admin\UserController@data');
    Route::get('user/{user}/show', 'Admin\UserController@show');
    Route::get('user/{user}/edit', 'Admin\UserController@edit');
    Route::get('user/{user}/delete', 'Admin\UserController@delete');
    Route::resource('user', 'Admin\UserController');

    


});








Route::group(['prefix' => 'ali', 'middleware' => 'auth'], function() {


Route::get('dashboard', 'Admin\DashboardController@index');

Route::get('bus/create','fypController@buscreate');
Route::get('bus/{id}/edit','fypController@busedit');
Route::get('bus/{id}/delete', 'fypController@busdelete'); 


 Route::get('stop/create','fypController@stopcreate');
 Route::get('stop/{id}/edit','fypController@stopedit');
 Route::get('stop/{id}/delete', 'fypController@stopdelete'); 



 Route::get('route/create','fypController@routecreate');
 Route::get('route/{id}/edit','fypController@routeedit');
 Route::get('route/{id}/delete', 'fypController@routedelete'); 


   
 Route::get('appuser/create','fypController@appusercreate');
 Route::get('appuser/{id}/edit','fypController@appuseredit');
 Route::get('appuser/{id}/delete', 'fypController@appuserdelete'); 


 Route::get('search/create','fypController@searchcreate');
 Route::get('search/{id}/edit','fypController@searchedit');
 Route::get('search/{id}/delete', 'fypController@searchdelete'); 


});


// Bus CRUD operation
 Route::get('bus', 'fypController@busdata');
 Route::post('bus', 'fypController@busstore');
 Route::get('bus/{id}/show', 'fypController@busshow');
    

// Stop CRUD operation
 Route::get('stop', 'fypController@stopdata');
 Route::post('stop', 'fypController@stopstore');
 Route::get('stop/{id}/show', 'fypController@stopshow');

// Route CRUD operation
 Route::get('route', 'fypController@routedata');
 Route::post('route', 'fypController@routestore');
 Route::get('route/{id}/show', 'fypController@routeshow');


// AppUser CRUD operation
 Route::get('appuser', 'fypController@appuserdata');
 Route::post('appuser', 'fypController@appuserstore');
 Route::get('appuser/{id}/show', 'fypController@appusershow');


// Search CRUD operation
 Route::get('search', 'fypController@searchdata');
 Route::post('search', 'fypController@searchstore');
 Route::get('search/{id}/show', 'fypController@searchshow');

Route::get('sitebus', 'SiteController@buslist');
Route::get('sitestop', 'SiteController@stoplist');
Route::get('sitebusroute/{id}', 'SiteController@busroute');
Route::get('sitebusdetail/{id}', 'SiteController@busdetail');
Route::get('sitestopbus/{id}', 'SiteController@stopbus');

Route::get('gittest', 'SiteController@stopbus');

















   //  final routes


    Route::resource('stop', 'StopController');
    Route::resource('bus', 'BusController');
//chanred from stop to ruko
    Route::get('ruko', 'StopController@index');
//    Route::get('stop/{id}/route', 'StopController@stoproute');

    Route::get('stop/{id}', 'StopController@show');
    

    Route::get('bus', 'BusController@index');
   // Route::get('bus/{id}/route', 'BusController@busroute');

    Route::get('bus/{id}', 'BusController@show');
    Route::get('ali','BusController@index');
































