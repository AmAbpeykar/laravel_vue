<?php

use Illuminate\Support\Facades\App;
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

Route::get('/' ,function (){

    if (App::isLocale('en')){
        $lang = 'fa';
    }else{
       $lang = 'en';
    }

    return view('welcome' , ['lang' => $lang]);

})->name('home');


Route::get('/{locale}', function ($locale = null) {

       if ($locale == 'fa'){
           App::setLocale('fa');
           $lang = 'en';
       }else{
           App::setLocale('en');
           $lang = 'fa';
       }

   return view('welcome' , ['lang' => $lang]);

})->name('lang');



