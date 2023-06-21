<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboradController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/master', [DashboradController::class,'master'])->name('master');
Route::get('/dashboard', [DashboradController::class,'dashboard'])->name('dashboard');
