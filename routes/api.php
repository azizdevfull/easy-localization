<?php

use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('posts', PostController::class)->middleware('localization');
Route::post('/setLocale', [LocalizationController::class, 'setLocale'])->middleware('localization');
Route::get('/locales', [LocalizationController::class, 'index'])->middleware('localization');