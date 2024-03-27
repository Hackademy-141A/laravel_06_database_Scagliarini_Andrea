<x-layout>
    <div class="container">
        <div class="row">
            @foreach ($reading as $reading)
            <div class="col-12 col-md-4 mt-5">
                <img src="{{ Storage::url($reading->img)}}" class="img-fluid" alt="">
                <h1>{{$reading->bookName}}</h1> 
                <h2>{{$reading->autore}}</h2>
                <p>{{$reading->editore}}</p> 
                <p>{{$reading->year}}</p>          
            </div>
            @endforeach
        </div>
    </div>
</x-layout>