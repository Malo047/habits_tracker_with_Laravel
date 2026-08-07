<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view( view: 'app');
});

//Route::get('/home', [\App\Http\Controllers\SiteController::class, "index"]); 
Route::get('/home', [SiteController::class, "index"]);