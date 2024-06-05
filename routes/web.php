<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SubscribeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/configuracao",function(){
    return view('configuracao');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get("/categoria",[CategoriaController::class,'index'])->middleware(['auth', 'verified'])->name('categoria.index');
Route::get('/categoria/{slug}', [CategoriaController::class, 'show'])->name('categoria.show');
Route::post("/categoria",[CategoriaController::class,'cadastrar'])->middleware(['auth', 'verified'])->name('categoria');
Route::delete('/categorias/{id}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');
Route::post('/pdf/upload', [PdfController::class, 'upload'])->name('pdf.upload');
Route::get("/pdf",[PdfController::class, 'index'])->middleware(['auth', 'verified'])->name('pdf');
Route::get('/dashboard', [DashboardController::class,'index'])->middleware(['auth', 'verified'])->name('home');
Route::get('/subscribe',[SubscribeController::class,'index'])
    ->name('subscribe')
    ->middleware(\Illuminate\Auth\Middleware\Authenticate::class);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
