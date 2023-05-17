<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminare definitivamente il fumetto dalla lista?</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            ATTENZIONE: cliccando il tasto 'Elimina', il dato sarà eliminato definitivamente e non sarà più recuperabile
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>

            <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                    
               @csrf
            
               @method('DELETE')

               <button type="submit" class="btn btn-danger">Elimina</button>

            </form>

        </div>
      </div>
    </div>
  </div>




  