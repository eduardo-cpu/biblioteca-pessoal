<!DOCTYPE html>
<html>
<body>
    <x-layout title="Biblioteca Pessoal">
        <div class="container">
            <div class="toolbar">
                <a href="{{ route('livros.create') }}" class="btn btn-dark mb-2">Adicionar Livro</a>
            </div>

            @isset($mensagemSucesso)
            <div class="alert alert-success">
                {{ $mensagemSucesso }}
            </div>
            @endisset

            <div class="row">
                @php
                    $count = 1;
                @endphp
                @foreach($livros as $livro)
                    <div class="col-md-3 mb-3">
                        <div class="card">
                        <img src="{{$livro->url_imagem}}" alt="Imagem do Livro">
                            <div class="card-body">
                                <h5 class="card-title">{{$livro->titulo}}</h5>
                                <p>Autor: {{$livro->autor}}</p>
                                <p>Classificação: {{$livro->classificacao}}</p>
                                <a href="{{ route('livros.detalhes', $livro->id) }}" class="btn btn-secondary btn-sm">Detalhes</a>
                            </div>
                            <div class="card-footer" style="display: flex; justify-content: space-between;">
                                <a href="{{ route('livros.edit', $livro->id) }}" class="btn btn-primary btn-sm">Editar</a>
                                <form action="{{ route('livros.destroy', $livro->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Deletar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @if ($count % 4 == 0)
                        </div>
                        <div class="row">
                    @endif
                    @php
                        $count++;
                    @endphp
                @endforeach
            </div>
        </div>
    </x-layout>
</body>
</html>
