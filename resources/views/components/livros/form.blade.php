<form action="{{$action}}" method="post">
        @csrf
        @isset($titulo)
        @method('PUT')
        @endisset
        <div class="mb-3">
            <label for="titulo" class = "form-label">Título:</label>
            <input type="text" id="titulo" name="titulo" class="form-control"@isset($titulo)value="{{$titulo}}"@endisset>

            <label for="autor" form-label>Autor:</label>
            <input type="text" id="autor" name="autor" class="form-control"@isset($autor)value="{{$autor}}"@endisset>

            <label for="classificacao" form-label>Classificação (de 1 a 5):</label>
            <input type="number" id="classificacao" name="classificacao" min="1" max="5"class="form-control"@isset($classificacao)value="{{$classificacao}}"@endisset>

            <label for="resenha" form-label>Resenha:</label>
            <textarea id="resenha" name="resenha" rows="4" cols="50" class="form-control"@isset($resenha)value="{{$resenha}}"@endisset></textarea>

            <label for="data_adicao"form-label >Data de Adição:</label>
            <input type="date" id="data_adicao" name="data_adicao" class="form-control"@isset($data_adicao)value="{{$data_adicao}}"@endisset>

        </div>
            <input type="submit" class="btn btn-primary" value="Salvar">
    </form>


