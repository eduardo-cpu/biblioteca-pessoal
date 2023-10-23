<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Livro;
use Illuminate\Http\Request;

class livrosController extends Controller
{
    public function index()
    {

        return Livro::all();

    }

    public function store(Request $request)
    {

        return response()
            ->json(Livro::create($request->all()), 201);

    }

    public function show(int $id)
    {

        $livro = Livro::find($id);
        if ($livro) 
        {
            return response()->json($livro, 200);
        } else 
        {
            return response()->json(['message' => 'Livro não encontrado'], 404);
        }
    }

    public function update(Livro $livro, Request $request)
    {

        $livro->fill($request->all());
        $livro->save();

        return $livro;

    }


    public function destroy(int $livro)
    {

        Livro::destroy($livro);
        return response()->noContent();

    }
}