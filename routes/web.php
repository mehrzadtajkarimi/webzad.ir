<?php

use App\Core\Routing\Route;
use App\Middleware\Gate;


/**
 * add middleware example =
 * Route::get('/','exampleController@index',[Gate::class]);
 *
 * add slug example =
 * Route::get('/example/{slug}','exampleController@index');
 * Route::get('/example/{slug}/example2/{id}','exampleController@index');
 */





Route::get('/','HomeController@index');
Route::get('/archive','ArchiveController@index');
Route::get('/article','ArticleController@index');
Route::get('/Portfolio','PortfolioController@index');