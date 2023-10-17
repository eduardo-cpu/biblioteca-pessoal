<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivrosController extends Controller
{
    public function index(Request $request)
    {
        $livros = [
            'Harry Potter',
            'Uma breve Historia do Tempo',
            'Pai Rico, Pai Pobre'
        ];
        return view('livros.index')->with('livros', $livros);
    }
}