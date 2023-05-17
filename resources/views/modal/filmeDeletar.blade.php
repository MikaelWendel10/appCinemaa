<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Aviso</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-dark">
            Deseja excluir o filme: {{$dadosFilme->nomefilme}} ?</br> 
            Esta operação não poderá ser revertida. 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <form method="post" action="{{route('apagar-filme',$dadosFilme->id)}}">
            @method('delete')
            @csrf 
            <button type="submit" class="btn-danger">Excluir</button>
      </form>      
    </div>
    </div>
  </div>
</div>