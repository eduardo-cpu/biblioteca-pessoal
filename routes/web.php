<?php

use App\Http\Controllers\LivrosController;
use App\Http\Controllers\AmazonController;
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

Route::get('/', function () {
    return redirect('/livros');
});



Route::resource('/livros', LivrosController::class)
    ->only(['index','destroy','create','store','edit','update']);
    
Route::get('/livros/{livro}/detalhes', [LivrosController::class, 'detalhes'])
    ->name('livros.detalhes');


    