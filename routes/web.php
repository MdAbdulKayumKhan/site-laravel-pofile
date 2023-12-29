<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('frontend.Home');
});

Route::get('/admin', function (){
    return view('backend.Home');
});
