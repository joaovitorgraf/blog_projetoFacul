<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostagemController;
use App\Http\Controllers\UserController;

Route::get('/', [PostagemController::class, 'index'])->name('home');
Route::get('login/{id_usuario}/postagem/', [PostagemController::class, 'create'])->name('createPostagem');
Route::get('postagem/{id}', [PostagemController::class, 'readOne'])->name('readOnePostagem');
Route::post('/postagem', [PostagemController::class, 'store'])->name('savePostagem');

Route::get('login/cadastro', [UserController::class, 'create'])->name('createUser');
Route::post('login/saveuser', [UserController::class, 'store'])->name('saveUser');
