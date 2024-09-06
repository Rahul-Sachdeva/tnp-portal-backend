<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\GoogleFormRecordController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\AuthController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::get('{user}', [UserController::class, 'show']);
    Route::post('/', [UserController::class, 'store']);
    Route::put('{user}', [UserController::class, 'update']);
    Route::delete('{user}', [UserController::class, 'destroy']);
});

Route::prefix('posts')->group(function () {
    Route::get('/', [PostController::class, 'index']);
    Route::get('{post}', [PostController::class, 'show']);
    Route::post('/', [PostController::class, 'store']);
    Route::put('{post}', [PostController::class, 'update']);
    Route::delete('{post}', [PostController::class, 'destroy']);
});

Route::prefix('applications')->group(function () {
    Route::get('/', [ApplicationController::class, 'index']);
    Route::get('{application}', [ApplicationController::class, 'show']);
    Route::post('/', [ApplicationController::class, 'store']);
    Route::put('{application}', [ApplicationController::class, 'update']);
    Route::delete('{application}', [ApplicationController::class, 'destroy']);
});

Route::prefix('notifications')->group(function () {
    Route::get('/', [NotificationController::class, 'index']);
    Route::get('{notification}', [NotificationController::class, 'show']);
    Route::post('/', [NotificationController::class, 'store']);
    Route::put('{notification}', [NotificationController::class, 'update']);
    Route::delete('{notification}', [NotificationController::class, 'destroy']);
});

Route::prefix('google-form-records')->group(function () {
    Route::get('/', [GoogleFormRecordController::class, 'index']);
    Route::get('{googleFormRecord}', [GoogleFormRecordController::class, 'show']);
    Route::post('/', [GoogleFormRecordController::class, 'store']);
    Route::put('{googleFormRecord}', [GoogleFormRecordController::class, 'update']);
    Route::delete('{googleFormRecord}', [GoogleFormRecordController::class, 'destroy']);
});

Route::prefix('company-profiles')->group(function () {
    Route::get('/', [CompanyProfileController::class, 'index']);
    Route::get('{companyProfile}', [CompanyProfileController::class, 'show']);
    Route::post('/', [CompanyProfileController::class, 'store']);
    Route::put('{companyProfile}', [CompanyProfileController::class, 'update']);
    Route::delete('{companyProfile}', [CompanyProfileController::class, 'destroy']);
});


