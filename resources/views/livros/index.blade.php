<x-layout title="Livros">
    <a href="{{route('livros.create')}}" class="btn btn-dark mb-2">Adicionar Livro</a>

    @isset($mensagemSucesso)
    <div class="alert alert-success">
        {{ $mensagemSucesso }}
    </div>
    @endisset

    <ul class="list-group">
        @foreach($livros as $livro)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{$livro->titulo}}
            
            <form action="{{ route('livros.destroy', $livro->id) }}" method="post" class="ms-2">
                @csrf
                @method('DELETE')
                <a href="{{ route('livros.edit', $livro->id) }}" class="btn btn-primary btn-sm">Editar</a>
            
                <button class="btn btn-danger btn-sm">
                    X
                </button>
                <a href="{{ route('livros.detalhes', $livro->id) }}" class="btn btn-secondary mx-2">Detalhes</a>
            </form>
        </li>
        @endforeach
    </ul>
    </body>
    </html>
</x-layout> 