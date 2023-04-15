<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return redirect('/home');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>"encuestado"],function () {
    Route::put('/respuesta', 'HomeController@respuesta')->name('respuestaf');
});



Route::group(['prefix'=>"admin"],function () {
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');


    Route::get('/reporte', 'AdminController@reporte2')->name('reporte2');//tabla
    Route::get('/reporte3', 'AdminController@reporte3')->name('reporte3');//tabla

    Route::get('/Agregar_items', 'AdminController@Agregar_items')->name('Agregar_items');//    agregar items(preguntas FI FCE, sectores
//    Route::get('/Agregar_item2', 'AdminController@Agregar_item2')->name('Agregar_item2');//    agregar items(preguntas FI FCE, sectores
//    Route::get('/Agregar_item3', 'AdminController@Agregar_item3')->name('Agregar_item3');//    agregar items(preguntas FI FCE, sectores


    Route::put('/Agregar_item2', 'AdminController@Agregar_item2')->name('Agregar_item2');
    Route::put('/Agregar_item3', 'AdminController@Agregar_item3')->name('Agregar_item3');
    Route::put('/Agregar_item4', 'AdminController@Agregar_item4')->name('Agregar_item4');
    Route::put('/Agregar_pregunta', 'AdminController@Agregar_preguntaf')->name('Agregar_preguntaf');


    Route::get('/Listar_preguntas', 'AdminController@Listar_preguntas')->name('Listar_preguntas');//    listas
    Route::get('users/export/', 'AdminController@export')->name('export1');//a excel - reporte
    Route::get('users/export2/', 'AdminController@export2')->name('export2');//a excel - DB

    Route::get('users/pregunta.update', 'AdminController@pregunta_update')->name('pregunta.update');//a excel - DB

    Route::get('users/Superadmin', 'AdminController@permisos')->name('Superadmin');//a excel - DB

});
