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

Route::view(
    '/',
    'home',
    [
        "companyname" => "Company Dog",
        "companydesc" => "This company helps more dog than helps people"
    ]
)->name('kkk');

Route::get('/viewList', function () {
    return view('viewSupplier');
});
