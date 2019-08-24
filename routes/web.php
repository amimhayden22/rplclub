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
    // return view('welcome');
    return "Ini adalah saya";
});

Route::get('amim', function () {
    // return view('welcome');
    return "M Gus Khamim";
});

Route::get('bebas/{variabel}', function ($variabel) {
    return $variabel;
});

Route::get('pangkat/{angka}', function ($angka) {
    $hasil = $angka * $angka;
    return $hasil;
});

Route::get('tampilan', function () {
    return view('cahrpl');
});
Route::get('biodata', function () {
    return view('biodata');
});
Route::get('pengalaman', function () {
    return view('pengalaman');
});