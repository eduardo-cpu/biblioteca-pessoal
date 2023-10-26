<form action="{{$action}}" method="post">
    @csrf
    @isset($titulo)
        @method('PUT')
    @endisset
    <div class="container" style="margin: 30px">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="mb-3 shadow p-3 rounded">
                    <label for="titulo" class="form-label">Título:</label>
                    <input type="text" 
                        id="titulo" 
                        name="titulo" 
                        class="form-control"
                        @isset($titulo) value="{{ $titulo }}" @endisset>
                </div>

                <div class="mb-3 shadow p-3 rounded">
                    <label for="url_imagem" class="form-label">URL da Imagem:</label>
                    <input type="text" 
                        id="url_imagem" 
                        name="url_imagem" 
                        class="form-control"
                        @isset($url_imagem) value="{{ $url_imagem }}" @endisset>
                </div>

                <div class="mb-3 shadow p-3 rounded">
                    <label for="autor" class="form-label">Autor:</label>
                    <input type="text" 
                        id="autor" 
                        name="autor" 
                        class="form-control"
                        @isset($autor) value="{{ $autor }}" @endisset>
                </div>

                <div class="mb-3 shadow p-3 rounded">
                    <label for="classificacao" class="form-label">Classificação (de 1 a 5):</label>
                    <input type="number" 
                        id="classificacao" 
                        name="classificacao" 
                        min="1" 
                        max="5" 
                        class="form-control"
                        @isset($classificacao) value="{{ $classificacao }}" @endisset>
                </div>

                <div class="mb-3 shadow p-3 rounded">
                    <label for="resenha" class="form-label">Resenha:</label>
                    <textarea id="resenha" 
                        name="resenha" 
                        rows="4" 
                        cols="50" 
                        class="form-control">@isset($resenha){{ $resenha }}@endisset</textarea>
                </div>

                <div class="mb-3 shadow p-3 rounded">
                    <label for="data_adicao" class="form-label">Data de Adição:</label>
                    <input type="date" 
                        id="data_adicao" 
                        name="data_adicao" 
                        class="form-control"
                        @isset($data_adicao) value="{{ $data_adicao }}" @endisset>
                </div>

                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>
    </div>
</form>
