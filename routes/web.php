<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FonctionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientsController;
use App\Models\Clients;

Route::get('/', function () {
    return view('accueil');
})->middleware('auth')->name('home');

Route::get('/conformite/login', function () {
    return view('login');
})->name('login');

Route::post('/conformite/connexion',[UserController::class,'connexion'])->name('connexion');

Route::resource('/conformite-fonction', FonctionController::class)->names('route_fonction');
Route::resource('/conformite-utilisateur', UserController::class)->names('route_users');
Route::resource('/conformite-client', ClientsController::class)->names('route_client');

