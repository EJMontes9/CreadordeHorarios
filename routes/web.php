<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\DocumentController;

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

Route::get('/', function () {
    return view('welcome');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('', function () {return view('welcome');})->name('dashboard');
    Route::resource('teachers', TeacherController::class);
    // Ruta para manejar múltiples niveles de carpetas
    Route::get('documents/{path?}', [DocumentController::class, 'index'])
        ->where('path', '.*')
        ->name('documents.index');

    Route::delete('documents/{document}', [DocumentController::class, 'destroy'])->name('documents.destroy');
    Route::get('documentscreate', [DocumentController::class, 'create'])->name('documents.create');
    Route::post('documents', [DocumentController::class, 'store'])->name('documents.store');
    Route::post('documents/create-folder', [DocumentController::class, 'createFolder'])->name('documents.createFolder');
    Route::post('documents/create-file', [DocumentController::class, 'createFile'])->name('documents.createFile');
    Route::get('/docspecific/{rootId}/{subIds?}', [DocumentController::class, 'showSpecificFolder'])
        ->where('subIds', '.*')
        ->name('documents.specific');
    Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.index');
});




