<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;

Route::get('/', [AuthorController::class,'index']);
Route::get('find',[AuthorController::class,'find']);
Route::post('/find',[AuthorController::class,'search']);
Route::get('/add',[AuthorContoroller::class, 'add']);
Route::post('add',[AuthorContoroller::class, 'create']);
Route::get('/edit',[AuthorController::class, 'edit']);
Route::post('/edit',[AuthorController::class, 'update']);
