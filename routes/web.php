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

Route::get('/', function () {
    return view('welcome');
});

Route::get('new/email', function(){
  $user = new stdClass();
  $user->name = 'test';
  $user->email='testg2503@gmail.com';
  //return new \App\Mail\newLaravelTips($user);
  App\Jobs\email::dispatch($user)
                  ->delay(now()->addSeconds(10));
});
