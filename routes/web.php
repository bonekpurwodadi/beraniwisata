<?php
Route::get('/', function () {
    return view('beranda');
});





Route::get('/cekpromo', 'HalamanController@cekpromo');
Route::get('/comingsoon', 'HalamanController@comingsoon');
Route::get('/kumpulanartikel', 'HalamanController@kumpulanartikel');
Route::get('/fokusartikel', 'HalamanController@fokusartikel');
