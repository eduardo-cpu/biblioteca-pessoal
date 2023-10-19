<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LivrosController extends Controller
{
    public function index(Request $request)
    {
       $livros = Livro::query()->orderBy('titulo')->get();
       $mensagemSucesso = $request->session()->get(key:'mensagem.sucesso');

        return view('livros.index')->with('livros', $livros)
            ->with('mensagemSucesso', $mensagemSucesso);
    }
    public function create()
    {
        return view('livros.create');
        
    }
    public function edit(Livro $livro)
    {
        return view('livros.edit')->with('livro',$livro);
    }

    public function store(Request $request)
    {
       $livro = Livro::create($request->all());
        return to_route('livros.index')
            ->with('mensagem.sucesso',"Livro {$livro->titulo} adicionado com sucesso");
    }

    public function destroy(Livro $livro)
    {
        $livro->delete();
  
        return to_route('livros.index')
            ->with('mensagem.sucesso', "Livro {$livro->titulo} removido com sucesso");
    }
    
    public function update(Livro $livros, Request $request)
    {
        $livros->titulo = $request->titulo;
        $livros->save();

        return to_route('livros.index')
            ->with('mensagem.sucesso', "Livro {$livros->titulo} atualizado com sucesso");
    }

}