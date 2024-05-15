<?php

use App\Http\Controllers\TestController;
use App\Models\Test;
use Illuminate\Support\Facades\Route;

Route::get('/', [TestController::class, 'index'])->name('root');
Route::post('/test', [TestController::class, 'store'])->name('test');
