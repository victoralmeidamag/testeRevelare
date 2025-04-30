<?php

use App\Http\Controllers\User\LoginUserController;
use App\Http\Controllers\User\LogoutController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth.user'])->group(function () {
    Route::get('/inicio', function () {
        return view('pages.online.home');
    })->name('online.home');
});

Route::post('/login', [LoginUserController::class, 'index'])->name('form.login');

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('pages.offline.home');
});

Route::get('/home', function () {
    return view('pages.offline.home');
})->name('offline.home');

Route::get('/login', function () {
    return view('pages.login');
})->name('login');

Route::get('/register', function () {
    return view('pages.register');
})->name('register');

Route::get('/register/steps', function () {
    return view('layouts.register-steps', [
        'title' => 'Cadastro - Passo a Passo'
    ]);
})->name('register.steps');

Route::get('/register/shed/steps', function () {
    return view('layouts.register-shed-steps', [
        'title' => 'Cadastro Galpão- Passo a Passo',
        'layout' => Auth::check() ? 'layouts.online.principal' : 'layouts.offline.principal'
    ]);
})->name('register-shed.steps');


Route::get('/profile/data', function(){
    return view('pages.my-account.data');
})->name('profile.data');

Route::get('/profile/login-security', function(){
    return view('pages.my-account.login-security');
})->name('profile.login-security');

Route::get('/profile/pre-bookings', function(){
    return view('pages.my-account.pre-bookings');
})->name('pre-bookings');