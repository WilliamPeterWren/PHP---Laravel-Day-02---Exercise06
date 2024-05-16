<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('index');
});

Route::get('/display_iphone', [PostController::class,'display_iphone'])->name('display_iphone');
Route::get('/display_samsung/{id}', [PostController::class,'display_samsung'])->name('display_iphone');
Route::get('/display_realme/{name}', [PostController::class,'display_realme'])->name('display_realme');
Route::get('/display_redmi/{id}/{name}', [PostController::class,'display_redmi'])->name('display_redmi');