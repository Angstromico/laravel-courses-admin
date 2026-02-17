<?php

use App\Http\Controllers\Auth\RegisterUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*********************
 * Authentication Routes
 *********************/

Route::any('auth/register', RegisterUserController::class);
