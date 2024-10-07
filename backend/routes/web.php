<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneController;

Route::get('/', [PhoneController::class, "index"])->name("home");
Route::get('/{id}', [PhoneController::class, "show"])->name("phones.show");
