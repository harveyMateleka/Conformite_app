<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FonctionController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('accueil');
});

Route::resource('/conformite-fonction', FonctionController::class)->names('route_fonction');
Route::resource('/conformite-utilisateur', UserController::class)->names('route_users');
