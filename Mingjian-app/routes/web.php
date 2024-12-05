<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WishController;

//argumente: path , [controller , controller-function]
Route::get('/',  [WishController::class, 'showdata']);
