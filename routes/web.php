<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.offline.home');
});

Route::get('/home', function () {
    return view('layouts.offline.home');
});

Route::get('/login', function () {
    return view('layouts.login');
});

Route::get('/register', function () {
    return view('layouts.register');
})->name('register');

Route::get('/register/steps', function () {
    return view('layouts.register-steps', [
        'title' => 'Cadastro - Passo a Passo'
    ]);
})->name('register.steps');