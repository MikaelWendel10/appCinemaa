@extends('padrao')

@section('content') 

<form>
            <div class="mb-3 form-check">
                <label for="numeroInput" class="form-label">Número da sala:</label>
                <input type="number" class="form-control" id="numeroInput" >
            </div>
            <div class="mb-3 form-check">
                <label for="qtdInput" class="form-label">Quantidade de Poltronas</label>
                <input type="number" class="form-control" id="qtdInput">
            </div>
            <div class="mb-3 form-check">
                <label for="filmeInput" class="form-label">Filme:</label>
                <input type="text" class="form-control" id="filmeInput" >
            </div>
            <div class="mb-3 form-check">
                <label for="ssInput" class="form-label">Sessões:</label>
                <input type="text" class="form-control" id="ssInput">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>

@endsection