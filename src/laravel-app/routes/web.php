<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\CategoryController;

Route::get('/', function() {
    return redirect()->route('categories.index');
});

Route::resource('categories', CategoryController::class)->except(['show']);
