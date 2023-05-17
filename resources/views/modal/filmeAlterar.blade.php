<!-- Modal -->
<div class="modal fade" id="modalAlterarfilme-{{$dadosFilme->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Aviso</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-dark">

      <form method = "post" action="{{route('alterar-banco-filme',$dadosFilme->id)}}" enctype = "multipart/form-data">

        @method('PUT')
        @csrf 

        <div class="mb-3 form-check">
        <label for="filmeInput" class="form-label">Filme:</label>
        <input type="text" name="nomefilme" value="{{$dadosFilme->nomefilme}}" class="form-control" id="filmeInput" >
        </div>
        <div class="mb-3 form-check">
        <label for="atoresInput" class="form-label">Atores:</label>
        <input type="text" name="atoresfilme" class="form-control" id="atoresInput">
        </div>
        <div class="mb-3 form-check">
        <label for="dataLancamentoInput" class="form-label">Data de Lançamento:</label>
        <input type="date" name="datalancamentofilme" class="form-control" id="dataLancamentoInput" >
        </div>
        <div class="mb-3 form-check">
        <label for="sinopseInput" class="form-label">Sinopse:</label>
        <textarea class="form-control" name="sinopsefilme" id="sinopseInput" rows="3"></textarea>
        </div>
        <div class="mb-3 form-check">
        <label for="capaInput" class="form-label">Capa:</label>
        <input name="capafilme" class="form-control" type="file" id="capaInput">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>   
    </div>
    </div>
  </div>
</div>