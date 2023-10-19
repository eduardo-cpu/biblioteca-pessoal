<x-layout title="Editar Livro {{$livro->titulo}}">
    <x-livros.form :action="route('livros.update', $livro->id)" :titulo="$livro->titulo"/>
</x-layout>
