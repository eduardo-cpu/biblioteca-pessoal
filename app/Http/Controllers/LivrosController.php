<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LivrosController extends Controller
{
    public function index()
    {
        $livros = DB::select('SELECT titulo FROM livros');

        return view('livros.index')->with('livros', $livros);
    }
    public function create()
    {
        return view('livros.create');
    }
    public function edit()
    {
        return view('livros.edit');
    }

    public function store(Request $request)
    {
        $tituloLivro = $request->input('titulo');
        
        if (DB::insert('INSERT INTO livros (titulo) VALUES (?) ',[$tituloLivro])){
            echo "Livro cadastrado com sucesso!";  
        }else {
            return "deu erro";
        }
    }


}