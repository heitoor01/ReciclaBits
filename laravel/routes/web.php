<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/mapa', 'map')->name('map');
Route::view('/contato', 'contato')->name('contato');
Route::view('/faq', 'faq')->name('faq');
Route::view('/sobre-nos', 'sobreNos')->name('sobre-nos');
Route::view('/cadastro', 'cadastro')->name('cadastro');
Route::view('/recuperar-senha', 'passwordRec')->name('password.recovery');
Route::view('/sugestoes', 'suggestions')->name('suggestions');
Route::view('/fale-conosco', 'talkToUs')->name('talk-to-us');
Route::view('/nao-encontrado', 'notFound')->name('not-found');
