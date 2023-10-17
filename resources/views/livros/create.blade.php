<x-layout title="Novo Livro">
    <form action="" method="post">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo"><br><br>

        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor"><br><br>

        <label for="classificacao">Classificação (de 1 a 5):</label>
        <input type="number" id="classificacao" name="classificacao" min="1" max="5"><br><br>

        <label for="resenha">Resenha:</label>
        <textarea id="resenha" name="resenha" rows="4" cols="50"></textarea><br><br>

        <label for="data_adicao">Data de Adição:</label>
        <input type="date" id="data_adicao" name="data_adicao"><br><br>

        <input type="submit" value="Salvar">
    </form>
</x-layout>
