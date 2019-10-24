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

//R//oute::get('/', function (){

//$nombre = "jorge";

//    return view('inicio')->with(['nombre' => $nombre]);

//})->name('inicio');   
//App::setlocale('es');
App::setLocale('es');

Route::view('/', 'home')->name('home');

Route::view('/about', 'about')->name('about');

Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');

Route::view('/contact', 'contact')->name('contact');


//Route::resource('proyectos', 'PortfolioController');

Route::post('contact','MessagesController@store');






