<?php

use Illuminate\Support\Facades\Route;

// cRud: Read
Route::get('/', 'HomeController@home') -> name('home');
// -----
Route::get('/movie/show/{id}', 'HomeController@show') -> name('show');

//Crud: Create
Route::get('/movie/create', 'HomeController@create') -> name('create'); // get empty form
Route::post('movie/store', 'HomeController@store') -> name('store'); // store data in db and return to show($id)/home

//crUd: Update
Route::get('/movie/edit/{id}', 'HomeController@edit') -> name('edit'); //get old data form
Route::post('/movie/update/{id}', 'HomeController@update') -> name('update'); //update data in db and return to show($id)/home


//cruD: Delete
Route::get('/movie/delete/{id}', 'HomeController@delete') -> name('delete');
