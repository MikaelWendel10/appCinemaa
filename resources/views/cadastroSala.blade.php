@extends('padrao')

@section('content')

<form>
            <div class="mb-3 form-check">
                <label for="nrSalaInput" class="form-label">Número da Sala:</label>
                <input type="text" class="form-control" id="nrSalaInput" >
            </div>
            <div class="mb-3 form-check">
                <label for="qtdePoltronasInput" class="form-label">Quantidade de Poltronas:</label>
                <input type="text" class="form-control" id="qtdePoltronasInput">
            </div>
            <div class="mb-3 form-check">
                <label for="filmeSalaInput" class="form-label">Filme que está passando nesta sala:</label>
                <input type="text" class="form-control" id="filmeSalaInput" >
            </div>
            <div class="mb-3 form-check">
                <label for="sessaoInput" class="form-label">Horário da Sessão:</label>
                <input type="text" class="form-control" id="sessaoInput" >
              </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>



@endsection 
