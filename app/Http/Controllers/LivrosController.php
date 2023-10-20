<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class livrosController extends Controller
{
    public function index(Request $request)
    {
        $series = Livro::query()->orderBy('titulo')->get();
        $mensagemSucesso = session('mensagem.sucesso');

        return view('livros.index')->with('livros', $series)
            ->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        return view('livros.create');
    }

    public function store(Request $request)
    {
        $livro = Livro::create($request->all());

        return to_route('livros.index')
            ->with('mensagem.sucesso', "Livro '{$livro->titulo}' adicionada com sucesso");
    }

    public function destroy(Livro $livro)
    {
        $livro->delete();

        return to_route('livros.index')
            ->with('mensagem.sucesso', "Livro '{$livro->titulo}' removida com sucesso");
    }

    public function edit(Livro $livro)
    {
        
        return view('livros.edit')->with('livro', $livro);
    }

    public function update(Livro $livro, Request $request)
    {
        $livro->fill($request->all());
        $livro->save();

        return to_route('livros.index')
            ->with('mensagem.sucesso', "Livro '{$livro->titulo}' atualizada com sucesso");
    }
    public function detalhes($id) 
    {
        $livro = Livro::find($id); 
        return view('livros.details', ['livro' => $livro]);
    }
    
    
    
}
