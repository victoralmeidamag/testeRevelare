<?php

use App\Http\Controllers\User\LoginUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.offline.home');
});

Route::get('/home', function () {
    return view('layouts.offline.home');
})->name('offline.home');

Route::get('/login', function () {
    return view('layouts.login');
})->name('login');

Route::get('/register', function () {
    return view('layouts.register');
})->name('register');

Route::get('/register/steps', function () {
    return view('layouts.register-steps', [
        'title' => 'Cadastro - Passo a Passo'
    ]);
})->name('register.steps');

Route::get('/inicio', function () {
    return view('layouts.online.home');
})->name('online.home');

Route::post('/login', [LoginUserController::class, 'index'])->name('form.login');