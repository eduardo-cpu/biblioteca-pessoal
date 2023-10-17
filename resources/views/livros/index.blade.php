<x-layout title="Livros">
    <a href="/livros/adicionar" class="btn btn-dark mb-2">Adicionar Livro</a>
    <ul class="list-group">
        @foreach($livros as $livro)
        <li class="list-group-item">{{$livro}}</li>
        @endforeach
    </ul>
    </body>
    </html>
</x-layout> 