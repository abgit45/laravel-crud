<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('students', [StudentController::class, 'index']);
Route::get('add-student', [StudentController::class, 'create']);
Route::post('add-student', [StudentController::class, 'store']);
Route::get('edit-student/{id}', [StudentController::class, 'edit']);
Route::put('update-student/{id}', [StudentController::class, 'update']);
Route::delete('delete-student/{id}', [StudentController::class, 'destroy']);
Route::get('main', [MainController::class, 'index']);
Route::post('/main/checklogin', [MainController::class, 'checklogin']);
Route::get('main/logout', [MainController::class, 'logout']);