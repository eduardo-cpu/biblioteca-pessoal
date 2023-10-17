<x-layout title="Livros">
    <a href="/livros/adicionar">Adicionar Livro</a>
    <ul>
        @foreach($livros as $livro)
        <li>{{$livro}}</li>
        @endforeach
    </ul>
    </body>
    </html>
</x-layout> 