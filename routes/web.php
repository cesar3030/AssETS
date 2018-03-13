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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('building', 'BuildingController');
Route::resource('user', 'UserController');
Route::resource('equipment', 'EquipmentController');
Route::resource('building.floor', 'Building\FloorController');
Route::resource('building.floor.room', 'Building\Floor\RoomController');
Route::resource('building.floor.room.item', 'Building\Floor\Room\ItemController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
