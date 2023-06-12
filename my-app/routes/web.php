<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClinicController;
use App\Http\Controllers\ProcedureController;
use App\Http\Controllers\AppointmentController;


Route::get('/', function () {
    return view('index');
});

Route::get('/clinics', [ClinicController::class, 'index']);
Route::get('/login', [UserController::class, 'login']);
Route::get('/appointments', [AppointmentController::class, 'create']);
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
Route::post('/logout', [UserController::class, 'logout']);
Route::put('/visits/{customer}', [AppointmentController::class, 'update']);
Route::delete('/visits/{customer}', [AppointmentController::class, 'destroy']);
Route::get('/visits',[AppointmentController::class, 'index']);
Route::post('/appointments', [AppointmentController::class, 'store']);
Route::get('/procedures/create',[ProcedureController::class, 'create']);
Route::post('/procedures',[ProcedureController::class, 'store']);
Route::get('/procedures/{procedure}',[ProcedureController::class, 'show']);
Route::get('/procedures/{procedure}/edit',[ProcedureController::class, 'edit']);
Route::put('/procedures/{procedure}',[ProcedureController::class, 'update']);
Route::delete('/procedures/{procedure}', [ProcedureController::class, 'destroy']);
