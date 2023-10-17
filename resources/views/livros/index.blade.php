<x-layout title="Livros">
<ul>
    @foreach($livros as $livro)
    <li>{{$livro}}</li>
    @endforeach
</ul>
</body>
</html>
</x-layout> 