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

    $comics = config('comics');

    $data = [
        'comics' => $comics
    ];

    return view('layouts.home', $data);

})->name('home');


// comics-single-page
Route::get('/comics/comic_id_{id}', function($id){

    $comics = config('comics');

    $comic = $comics[$id];

    $data = [
        'comics' => $comics,
        'comic' => $comic
    ];

    return view('layouts.comics', $data);

})->name('comic-single-page');
