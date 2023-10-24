<x-layout title="">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card position-relative mx-auto my-5">
                    <a href="{{ route('livros.index') }}" class="btn btn-danger position-absolute top-0 start-0 m-2">X</a>
                    <div class="card-body">
                        <h2 class="text-center">Título: {{ $livro->titulo }}</h2>
                        <div class="text-center mt-3">
                        @csrf
                            <img src="{{$livro->url_imagem}}" alt="Imagem do Livro" style="max-width: 100%; height: auto;">
                        </div>
                        <p class="text-center">Autor: {{ $livro->autor }}</p>
                        <p class="text-center">Classificação: {{ $livro->classificacao }}</p>
                        <p class="text-center">Resenha: {{ $livro->resenha }}</p>
                        <p class="text-center">Data de Adição: {{ $livro->data_adicao }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
