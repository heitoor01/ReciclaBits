<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/map.blade.php', function (){
    return view('map');
});

Route::get('/contato.blade.php', function () {
    return view('contato');
});

Route::get('/faq.blade.php', function () {
    return view('faq');
});