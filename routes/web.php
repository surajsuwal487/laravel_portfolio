<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\ProjectController;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('inquiry', [InquiryController::class, 'index'])->name('inquiry.index');

Route::name('inquiry.')->group(function () {
    Route::get('/get-inquiry', [InquiryController::class, 'index'])->name('index');
    Route::post('/store-inquiry', [InquiryController::class, 'store'])->name('store');
    Route::post('/delete-inquiry', [InquiryController::class, 'delete'])->name('delete');
    Route::get('/show-inquiry/{id}', [InquiryController::class, 'show'])->name('show');
});

Route::name('project.')->group(function () {
    Route::get('/get-project', [ProjectController::class, 'index'])->name('index');
    Route::post('/store-project', [ProjectController::class, 'store'])->name('store');
    Route::post('/delete-project', [ProjectController::class, 'delete'])->name('delete');
    Route::get('/edit-project/{id}', [ProjectController::class, 'edit'])->name('eidt');
});
