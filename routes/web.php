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

Route::get('/', function () {
    return view('main');
});

Route::get('/login', function () {
    return view('login.login');
});

<<<<<<< HEAD
// Route::post('api/v1/auth' , [ 
//     'as'    => 'auth',
//     'uses'  => 'LoginController@login'
// ]);

Route::post('api/v1/auth', 'LoginController@login') ;

Route::get('ajaxRequest', 'HomeController@ajaxRequest');

Route::post('ajaxRequest', 'HomeController@ajaxRequestPost');

Route::get('queue' , function(){
    return view('queue.queue');
});

Route::get('api/v1/queue/{id?}', 'QueueController@index');
=======
Route::get('/manage', function () {
    return view('ManageQueue.ManageQueue');
});
>>>>>>> 4780e20fa8b6d0642cf419b86055768ed42512fc
