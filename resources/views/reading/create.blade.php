<x-layout>
    <div class="containe">
        <div class="row">
            <div class="col-12 md-7">
               
                <form method="POST" action="{{route('reading.store')}}">

                    @csrf

                    <div class="mb-3">
                      <label for="bookName" class="form-label">Titolo Libro</label>
                      <input name="bookName" type="text" class="form-control" id="bookName">
                    </div>
                    
                    <div class="mb-3">
                        <label for="autor" class="form-label">Nome autore</label>
                        <input name="autor" type="text" class="form-control" id="autor">
                      </div>

                      <div class="mb-3">
                        <label for="editor" class="form-label">Nome Editore</label>
                        <input name="editor" type="text" class="form-control" id="editor">
                      </div>

                      <div class="mb-3">
                        <label for="year" class="form-label">Anno di Pubblicazione</label>
                        <input name="year" type="number" class="form-control" id="year">
                      </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>