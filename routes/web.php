<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PinjamBukuController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pinjam-buku', PinjamBukuController::class);
