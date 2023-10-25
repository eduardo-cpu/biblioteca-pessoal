<x-layout title="Detalhes">
    <div class="container">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card position-relative mx-auto my-5">
                <a href="{{ route('livros.index') }}" class="btn btn-danger position-absolute top-0 start-0 m-2" style="z-index: 1; width: 40px; height: 40px; border-radius: 50%; display: flex; justify-content: center; align-items: center;">X</a>
                    <div class="card-body" style="position: relative;">
                        <!-- Adicionando o ícone de edição no canto inferior esquerdo -->
                        <a href="{{ route('livros.edit', $livro->id) }}" class="btn btn-primary btn-sm position-absolute bottom-0 start-0" style="margin: 5px;">
                            <i class="fa fa-pencil"></i>
                        </a>
                        
                        <!-- Adicionando o botão de exclusão no canto inferior direito -->
                        <form action="{{ route('livros.destroy', $livro->id) }}" method="post" class="position-absolute bottom-0 end-0" style="margin: 5px;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                        
                        <h2 class="text-center">Título: {{ $livro->titulo }}</h2>
                        <div class="text-center mt-3">
                        @csrf
                            <img src="{{$livro->url_imagem}}" alt="Imagem do Livro" style="max-width: 100%; height: 350px">
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
