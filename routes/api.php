<?php

use App\Http\Controllers\Api\authorsController;
use App\Http\Controllers\api\booksController;
use App\Http\Controllers\Api\borrowBooksController;
use App\Http\Controllers\Api\categoriesController;
use App\Http\Controllers\Api\customersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/books',[booksController::class,'index']);
Route::get('/books/{id}',[booksController::class,'show']);

Route::get('/booksCategories',[categoriesController::class,'index']);
Route::get('/booksCategories/{id}',[categoriesController::class,'show']);

Route::get('/authors',[authorsController::class,'index']);
Route::get('/authors/{id}',[authorsController::class,'show']);


Route::get('/customers', [customersController::class,'index']);
Route::get('/customers/{id}', [customersController::class,'show']);

Route::get('/borrowBooks',[borrowBooksController::class,'index']);
Route::get('/borrowBooks/{id}',[borrowBooksController::class,'show']);
