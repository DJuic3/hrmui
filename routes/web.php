<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/form', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('beneficiaries');
});

Route::get('/personal-details', function () {
    return view('personalDetails');
})->name('personal-details');


Route::get('/contactDetails', function () {
    return view('contactDetails');
});

Route::get('/nationalityDetails', function () {
    return view('nationalityDetails');
});


