<?php
use App\Htpp\Controllers\LivrosController;
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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/livros',[\App\Http\Controllers\LivrosController::class, 'index']);
Route::get('/livros/adicionar',[\App\Http\Controllers\LivrosController::class, 'create']);
