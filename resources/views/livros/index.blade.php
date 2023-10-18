<x-layout title="Livros">
    <a href="/livros/adicionar" class="btn btn-dark mb-2">Adicionar Livro</a>
    <ul class="list-group">
        @foreach($livros as $livro)
        <li class="list-group-item d-flex justify-content-between align-items-center">{{$livro}}
            <a href="/livros/{{$livro}}/detalhes" class="btn btn-secondary mx-2">Detalhes</a>
        <a href="/livros/editar" class="btn btn-primary">Editar</a>
        </li>
        @endforeach
    </ul>
    </body>
    </html>
</x-layout> 