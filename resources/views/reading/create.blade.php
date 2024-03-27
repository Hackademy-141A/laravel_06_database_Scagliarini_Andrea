<x-layout>
  <div class="container">
    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    {{-- Ho commentato lo snippet degli errori poiché ho aggiunto per ogni singolo campo l'errore sotto --}}
    <div class="container">
        <div class="row">
            <div class="col-12 md-7">
               
                <form method="POST" action="{{route('reading.store')}}" enctype="multipart/form-data">

                    @csrf

                    <div class="mb-3">
                      <label for="bookName" class="form-label">Titolo Libro</label>
                      <input
                        name="bookName"
                        type="text"
                         class="form-control @error('bookName') is-invalid @enderror" id="bookName" 
                        value="{{old('bookName')}}">
                        @error('bookName')
                        <p class="text-danger"><small>{{ $message }}</small></p>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="autor" class="form-label">Nome autore</label>
                        <input 
                        name="autor" 
                        type="text" 
                        class="form-control @error('autor') is-invalid @enderror"  id="autor" 
                        value="{{old('autor')}}">
                        @error('autor')
                        <p class="text-danger"><small>{{ $message }}</small></p>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="editor" class="form-label">Nome Editore</label>
                        <input 
                        name="editor" 
                        type="text" 
                        class="form-control @error('editor') is-invalid @enderror" id="editor" 
                        value="{{old('editor')}}">
                        @error('editor')
                        <p class="text-danger"><small>{{ $message }}</small></p>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="year" class="form-label">Anno di Pubblicazione</label>
                        <input 
                        name="year" 
                        type="number" 
                        class="form-control @error('year') is-invalid @enderror" 
                        id="year" value="{{old('year')}}">
                        @error('year')
                        <p class="text-danger"><small>{{ $message }}</small></p>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="img" class="form-label">Immagine di copertina</label>
                        {{-- I file vanno sempre ricaricati, non vengono dunque salvati in value="{{old('')}}" --}}
                        <input 
                        name="img" 
                        type="file" 
                        class="form-control @error('img') is-invalid @enderror" 
                        id="img">
                        @error('img')
                            <p class="text-danger"><small>{{ $message }}</small></p>
                        @enderror
                      </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>