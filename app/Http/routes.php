<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\User;
use Carbon\Carbon;

Route::get('/', function () {
    return view('welcome');
});
/*
|--------------------------------------------------------------------------
| Crud Application
|--------------------------------------------------------------------------
*/


Route::resource('/posts','PostsController');


Route::get('/dates',function(){

    $date = new DateTime('+1 week');

    echo $date->format('m-d-Y');

    echo '<br>';


    echo Carbon::now()->addDay(10)->diffForHumans();
    echo '<br>';
    echo Carbon::now()->subMonths(5)->diffForHumans();

    echo '<br>';
    echo Carbon::now()->yesterday()->diffForHumans();



    echo '<br>';


});


Route::get('/getname',function(){

    $user = User::find(1);

    echo $user->name;


});

Route::get('/setname',function(){

    $user = User::find(1);

    $user->name = "william";

    $user->save();


});






Route::group(['middleware'=>'web'],function(){





});
