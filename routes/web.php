<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;

Route::get('/', [Login::class, 'login']);

