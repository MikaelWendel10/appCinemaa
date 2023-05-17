@extends('padrao')

@section('content')



<div class="container mt-5">
<form method="get" action="{{route('gerenciar-filme')}}">
  <div class="mb-3 row">
    <label for="inputPesquisar" class="col-sm-2 col-form-label">Pesquisar:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="nomefilme" id="inputPesquisar" placeholder="Digite o nome do filme" >
    </div>
    <div class="col-sm-2"> <button type="submit" class="btn btn-outline-primary">Pesquisar</button> </div>
  </div>
</form>

<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">Filme</th>
      <th scope="col">Atores</th>
      <th scope="col">Lançamento</th>
      <th scope="col">Alterar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
    @if(empty($_GET['nomefilme']))

    @else
    @foreach($dadosfilme as $dadosFilme)
    <tr>
      
      <th scope="row">{{$dadosFilme->id}}</th>
      <td>{{$dadosFilme->nomefilme}}</td>
      <td>{{$dadosFilme->atoresfilme}}</td>
      <td>
      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalAlterarfilme-{{$dadosFilme->id}}">
          Alterar
      </button>
      @include('modal.filmeAlterar')  
      </td>
      <td>
      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Excluir
        </button>
        @include('modal.filmeDeletar')
      </td>  

    </tr>
   @endforeach
  </tbody>
</table>

</div>
@endif
@endsection