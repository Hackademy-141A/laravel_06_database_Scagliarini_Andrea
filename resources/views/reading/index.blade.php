<x-layout>
    <div class="container">
        <div class="row">
            @foreach ($reading as $reading)
            <h1>{{$reading->bookName}}</h1> 
             <h2>{{$reading->autore}}</h2>           
            @endforeach
            <div class="col-12 col-md-4 mt-5"></div>
        </div>
    </div>
</x-layout>