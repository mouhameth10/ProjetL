<?php

use App\Http\Controllers\Etudiant;
use Illuminate\Support\Facades\Route;
Route::controller(Etudiant::class)->group(function () {
Route::get('/', 'index');
Route::get('/entreprise/create', 'create');
Route::get('/entreprise/{id}', 'show');
Route::get('/entreprise/{id}/edit', 'edit');
Route::post('/entreprise', 'store');
Route::patch('/entreprise/{id}', 'update');
Route::delete('/entreprise/{id}', 'destroy');
});
