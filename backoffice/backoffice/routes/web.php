<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

// Rotas de Autenticação
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'logar'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rota do Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Rotas de Perfil (para evitar erros de rota em falta)
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

// Rotas para a Gestão de Utilizadores no Backoffice
Route::get('/dashboard/utilizadores', [UserController::class, 'index'])->name('users.index');
Route::get('/dashboard/utilizadores/create', [UserController::class, 'create'])->name('users.create');
Route::post('/dashboard/utilizadores', [UserController::class, 'store'])->name('users.store');
Route::get('/dashboard/utilizadores/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/dashboard/utilizadores/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/dashboard/utilizadores/{id}', [UserController::class, 'destroy'])->name('users.destroy');