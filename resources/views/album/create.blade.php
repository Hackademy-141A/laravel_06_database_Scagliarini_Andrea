<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-1">Inserisci il tuo Libro</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-7">

                <form method="POST" action="{{route('album.store')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="nameBook" class="form-label">Nome Libro</label>
                        <input name="nameBook" type="text"
                            class="form-control @error('name') is-invalid @enderror" id="name"
                            value="{{ old('name') }}">

                        @error('name')
                            <p class="text-danger"><small>{{ $message }}</small></p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="artistAlbum" class="form-label">Autor</label>
                        <input name="autor" type="text"
                            class="form-control @error('artist') is-invalid @enderror" id="autore"
                            value="{{ Auth::user()->name }}">

                        @error('artist')
                            <p class="text-danger"><small>{{ $message }}</small></p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="yearAlbum" class="form-label">Anno di pubblicazione</label>
                        <input name="year" type="number" class="form-control @error('year') is-invalid @enderror"
                            id="yearAlbum" value="{{ old('year') }}">

                        @error('year')
                            <p class="text-danger"><small>{{ $message }}</small></p>
                        @enderror
                    </div>

                        
                    </div>

                    <div class="mb-3">
                        <label for="imgAlbum" class="form-label">Immagine di copertina</label>
                        {{-- I file vanno sempre ricaricati, non vengono dunque salvati in value="{{old('')}}" --}}
                        <input name="img" type="file" class="form-control @error('img') is-invalid @enderror"
                            id="imgAlbum">

                        @error('img')
                            <p class="text-danger"><small>{{ $message }}</small></p>
                        @enderror
                    </div>

                </form>


            </div>
        </div>
    </div>
</x-layout>