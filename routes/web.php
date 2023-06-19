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
})-> name('home');

Route::get('/characters', function () {
    return view('characters');
})-> name('characters');

Route::get('/comics', function () {
    return view('comics');
})-> name('comics');

Route::get('/movies', function () {
    return view('movies');
})-> name('movies');

Route::get('/tv', function () {
    return view('tv');
})-> name('tv');

Route::get('/games', function () {
    return view('games');
})-> name('games');

Route::get('/collectibles', function () {
    return view('collectibles');
})-> name('collectibles');

Route::get('/videos', function () {
    return view('videos');
})-> name('videos');

Route::get('/collectibles', function () {
    return view('collectibles');
})-> name('collectibles');

Route::get('/fans', function () {
    return view('fans');
})-> name('fans');

Route::get('/news', function () {
    return view('news');
})-> name('news');

Route::get('/shop', function () {
    return view('shop');
})-> name('shop');

Route::get('/cards', function () {
    $cards = config('cards.cards');
    return view('cards' , compact('cards'));
})-> name('cards');

Route::get('/dettaglio-serie/{slug}', function ($slug) {

    $cards = config('cards.cards');

    $card_array = array_filter($cards, fn($item) => $item[ 'slug' ] === $slug);

    $card = $card_array[array_key_first($card_array)];

    return view('card_detail'  ,  compact('card') );
})-> name('card_detail');

// Route menu footer

// Route::get('/terms', function () {
//     return view('terms');
// })-> name('terms');

// // Route::get('/privacy', function () {
// //     return view('privacy');
// // })-> name('privacy');
