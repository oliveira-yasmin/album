<?php

use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Rota página inicial
Route::get('/', [PhotoController::class, 'index']);

// Rota formulário de cadastro
Route::get('/photos/new', [PhotoController::class, 'create']);

// Rota que insere uma nova foto no banco de dados
Route::post('/photos', [PhotoController::class, 'store']);