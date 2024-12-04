<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostagemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ComentarioControler;

Route::get('/', [PostagemController::class, 'index'])->name('home');
Route::get('login/{id_usuario}/postagem/', [PostagemController::class, 'create'])->name('createPostagem');
Route::get('postagem/{id}', [PostagemController::class, 'readOne'])->name('readOnePostagem');
Route::post('/postagem', [PostagemController::class, 'store'])->name('savePostagem');
Route::delete('postagem/{id}', [PostagemController::class, 'delete'])->name('deletePostagem');
Route::get('editar/{id}', [PostagemController::class, 'visualizarEditar'])->name('visualizarEditar');
Route::put('postagem/{id}', [PostagemController::class, 'editar'])->name('editarPostagem');



Route::get('cadastro', [UserController::class, 'create'])->name('createUser');
Route::post('login/saveuser', [UserController::class, 'store'])->name('saveUser');
Route::get('/login', [UserController::class, 'visualizarLogin'])->name('visualizarLogin');
Route::post('/login', [UserController::class, 'login'])->name('validarLogin');

Route::get('/login/{id}', [UserController::class, 'showUser'])->middleware('validate.session')->name('visualizarUsuario');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::post('/savecomentario', [ComentarioControler::class, 'create'])->name('salvar.comentario');
