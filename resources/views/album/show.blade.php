<x-layout>

    <div class="container">
        <div class="row">
                <div class="col-12 col-md-4 mt-5">
                    {{-- @dd() --}}
                    {{-- Se trovi l'immagine in Storage inseriscila altrimenti metti l'altra --}}
                    {{-- <img src="{{ Storage::url($album->img) ? Storage::url($album->img)  : '/img/no.webp'}}" class="img-fluid" alt=""> --}}

                    <img src="{{ Storage::url($album->img)}}" class="img-fluid" alt="">
                    <h1>{{ $album->name }}</h1>
                    <h2>{{ $album->user->name }}</h2>
                    <p>Album del {{ $album->year }}</p>
                    <a class="btn btn-warning" href="{{route('album.edit', compact('album'))}}">Modifica l'album</a>

                    <form method="POST" action="{{route('album.delete',compact('album'))}}">
                        @csrf
                        @method("DELETE")

                        <button type="submit" class="btn btn-danger">Cancella l'album</button>
                    </form>
                    <a href="{{route('album.index')}}">Torna indietro</a>
                </div>
        </div>
    </div>
</x-layout>