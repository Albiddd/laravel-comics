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
    return view('home');
})->name('home');

Route::get('/comics', function () {
    $data = [
        'comics' => config('comics'),
    ];
    return view('comics\index', $data);
})->name('comics');



Route::get('/comics/{id}', function ($id){
    $comics = config('comics');
    if($id < count($comics)){
    $comic = $comics[$id];
    $data = [
        'comic' => $comic,
    ];
    return view('comics\show', $data);
    }else{
        abort(404);
    }
})->where('id', '[0-9]+')->name('details');

Route::view('/characters', 'characters')->name('characters');
Route::view('/movies', 'movies')->name('movies');
Route::view('/tv', 'tv')->name('tv');
Route::view('/videos', 'videos')->name('videos');
Route::view('/games', 'games')->name('games');
Route::view('/fans', 'fans')->name('fans');
Route::view('/news', 'news')->name('news');
Route::view('/shop', 'shop')->name('shop');
Route::view('/collectibles', 'collectibles')->name('collectibles');