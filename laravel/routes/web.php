<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use resources\views\auth;
use App\Http\Controllers\userController;

// Route::get('/entrar',function(){
//     return view ('auth/login');
// });

// Route::get('/cadastrar',function(){
//     return redirect()->route('register');
// });

Route::get('/dashboard',function(){
    return view('dashboard');
})->name('dashboard');

Route::get('/perfil', function(){
 return redirect()->route('home');
})->name('profile.edit');


Route::view('/', 'home')->name('home');
Route::view('/mapa', 'map')->name('map');
Route::view('/contato', 'contato')->name('contato');
Route::view('/faq', 'faq')->name('faq');
Route::view('/sobre-nos', 'sobreNos')->name('sobre-nos');
Route::view('/cadastro', 'cadastro')->name('cadastro');
Route::view('/recuperar-senha', 'passwordRec')->name('password.recovery');
Route::view('/sugestoes', 'suggestions')->name('suggestions');
Route::view('/fale-conosco', 'talkToUs')->name('talk-to-us');

require __DIR__.'/auth.php';
