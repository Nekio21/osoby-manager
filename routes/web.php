<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OsobaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/osoby', [OsobaController::class, 'index']);

Route::get('/osoby/dodaj', [OsobaController::class, 'create']);
Route::post('/osoby', [OsobaController::class, 'store']);

Route::get('/osoby/{osoba}/edytuj', [OsobaController::class, 'edit']);
Route::put('/osoby/{osoba}', [OsobaController::class, 'update']);
Route::delete('/osoby/{osoba}', [OsobaController::class, 'destroy']);