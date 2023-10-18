<x-layout title="Novo Livro">
    <form action="/livros/salvar" method="post">
        @csrf
        <div class="mb-3">
            <label for="titulo" class = "form-label">Título:</label>
            <input type="text" id="titulo" name="titulo" class="form-control">

            <label for="autor" form-label>Autor:</label>
            <input type="text" id="autor" name="autor" class="form-control">

            <label for="classificacao" form-label>Classificação (de 1 a 5):</label>
            <input type="number" id="classificacao" name="classificacao" min="1" max="5"class="form-control">

            <label for="resenha" form-label>Resenha:</label>
            <textarea id="resenha" name="resenha" rows="4" cols="50" class="form-control"></textarea>

            <label for="data_adicao"form-label >Data de Adição:</label>
            <input type="date" id="data_adicao" name="data_adicao" class="form-control">

        </div>
            <input type="submit" class="btn btn-primary" value="Salvar">
    </form>
</x-layout>
