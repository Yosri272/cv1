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

// Route::get('/', function () {

//     return view('welcome');
// });


 Route::get('/cvR', function () {

     return view('cvR');
 });
 Route::get('/cvE', function () {

    return view('cvE');
});
Route::get('/R_certificate', function () {

    return view('R_certificate');
});
Route::get('/E_certificate', function () {

    return view('E_certificate');
});
Route::get('/R_newp', function () {

    return view('R_newp');
});
Route::get('/E_newp', function () {

    return view('E_newp');
});