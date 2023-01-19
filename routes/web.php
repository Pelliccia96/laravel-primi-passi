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

Route::get('/', function () {

    $hello = "Laravel Primi Passi";

    return view('home', [
        "hello" => $hello,
    ]);
})->name("home");

Route::get('/Contacts', function () {

    $hello = "Laravel Primi Passi";
    $array = ["contatto1", "contatto2", "contatto3"];

    return view('contacts', [
        "hello" => $hello,
        "array" => $array,
    ]);
})->name("contacts");

Route::get('/AboutUs', function () {

    $hello = "Laravel Primi Passi";
    $array = ["elemento1", "elemento2", "elemento3"];

    return view('aboutus', [
        "hello" => $hello,
        "array" => $array,
    ]);
})->name("aboutus");

Route::get('/Info', function () {

    $hello = "Laravel Primi Passi";
    $name = "Info Numero 1";
    $surname = "Info Numero 2";
    $info = "Info Numero 3";

    return view('info', [
        "hello" => $hello,
        "name" => $name,
        "surname" => $surname,
        "info" => $info,
    ]);
})->name("info");
