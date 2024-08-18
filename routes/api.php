<?php

use App\Http\Controllers\TeacherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/teachers/import', [TeacherController::class, 'import'])->name('api.teachers.import');
Route::get('/teachers/export', [TeacherController::class, 'export'])->name('teachers.export');
Route::get('/teachers/download-template', [TeacherController::class, 'downloadTemplate'])->name('teachers.downloadTemplate');

