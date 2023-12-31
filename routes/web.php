<?php

use App\Livewire\Filmes\Filmes;
use App\Livewire\Filmes\Formulario;
use Illuminate\Support\Facades\Route;

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

Route::redirect('/', '/Filmes');

Route::get('/Filmes', Filmes::class);
Route::get('/Filmes/Cadastrar', Formulario::class);
Route::get('/Filmes/{filme}/editar', Formulario::class);
