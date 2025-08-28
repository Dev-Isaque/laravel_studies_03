<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    echo 'Blade Layouts';
});

/* Route::view('/home', 'home', ['myName' => 'Isaque Soares']); */

Route::get('/show', [MainController::class, 'showPage'])->name('home');