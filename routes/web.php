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

/* Route::get('/', ['as'=>'home', function () {
    return view('home');    
}]); */
/* 
Route::get('/contacto', ['as'=>'contactos',function () {
    //return "Sección de contactos"; //html
    return view('contactos ');
}]); */
/* return view('saludo',['nombre' =>$nombre]); */
/* return view('saludo')->with(['nombre' => $nombre]); */

Route::get('test',function(){
    $user = new App\User;
    $user->name = 'Jhon';
    $user->email = 'adore@hotmail.com';
    $user->password =  bcrypt("123456");
    $user->save();
    return $user;
});


Route::get('/', ['as'=>'home', 'uses' => 'PagesController@home' ])->middleware('example');
Route::get('/contactame', ['as'=>'contactos','uses' => 'PagesController@contact']);
Route::post('/contacto','PagesController@mensajes');
Route::get('/saludos/{nombre?}',['as'=>"saludos",'uses'=>'PagesController@saludo'])->where('nombre',"[A-Za-z]*");

Route::resource('mensajes','MessageController');

Route::get('login','Auth\LoginController@showLoginForm');
Route::post('login','Auth\LoginController@login');
Route::get('logout','Auth\LoginController@logout');

/* 
Route::get('mensajes',['as'=>'messages.index','uses'=>'MessageController@index']);
Route::get('mensajes/create',['as'=>'messages.create','uses'=>'MessageController@create']);
Route::post('mensajes',['as'=>'messages.store','uses'=>'MessageController@store']);
Route::get('mensajes/{id}',['as'=>'messages.show','uses'=>'MessageController@show']);
Route::get('mensajes/{id}/edit',['as'=>'messages.edit','uses'=>'MessageController@edit']);
Route::put('mensajes/{id}',['as'=>'messages.update','uses'=>'MessageController@update']);
Route::delete('mensajes/{id}',['as'=>'messages.destroy','uses'=>'MessageController@destroy']); */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
