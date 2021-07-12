<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\UserController::class, 'index'])->name('home');

Route::get('/questions/add', [App\Http\Controllers\QuestionController::class, 'create'])->name('addQuestion')->middleware('auth');

Route::get('/', [App\Http\Controllers\QuestionController::class, 'index'])->name('questions');
Route::get('/questions', [App\Http\Controllers\QuestionController::class, 'index'])->name('questions');
Route::post('/questions', [App\Http\Controllers\QuestionController::class, 'store'])->name('storeQuestion')->middleware('auth');

Route::get('/questions/{id}', [App\Http\Controllers\QuestionController::class, 'show'])->name('question');
Route::delete('/questions/{id}', [App\Http\Controllers\QuestionController::class, 'destroy'])->name('deleteQuestion')->middleware('auth');

Route::get('/myquestions', [App\Http\Controllers\QuestionController::class, 'selfIndex'])->name('myQuestions')->middleware('auth');

Route::post('/responses', [App\Http\Controllers\ResponseController::class, 'store'])->name('storeResponse')->middleware('auth');
Route::delete('/responses/{id}', [App\Http\Controllers\ResponseController::class, 'destroy'])->name('deleteResponse')->middleware('auth');

Route::get('/myresponses', [App\Http\Controllers\ResponseController::class, 'selfIndex'])->name('myResponses')->middleware('auth');
Route::delete('/users/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('deleteUser')->middleware('auth');



