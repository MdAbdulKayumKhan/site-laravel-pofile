<?php

use App\Http\Controllers\Backend\AdminServicesController;
use App\Http\Controllers\Backend\VisitorController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\AdminController;
use Illuminate\Support\Facades\Route;

/** Frontend route start */
Route::get('/',[HomeController::class,'HomeIndex']);


/** Frontend route end */

/** ###################### */

/** Backend route start */
Route::get('/admin',[AdminController::class,'AdminIndex']);

Route::get('/visitor',[VisitorController::class,'Visitor']);
Route::get('/services',[AdminServicesController::class,'AdminServices']);
Route::get('/getServices',[AdminServicesController::class,'getAdminServices']);
Route::post('/deleteService',[AdminServicesController::class,'AdminServiceDelete']);
/** Backend route end */
