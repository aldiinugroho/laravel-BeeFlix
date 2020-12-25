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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', 'moviedetailcontroller@alldata');

Route::get('/{id}', ['uses' =>'moviedetailcontroller@detail']);

Route::get('/category/{genre_id}', ['uses' =>'moviedetailcontroller@categoryS']);

Route::get('detail/{id}', ['uses' =>'moviedetailcontroller@detail']);