@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Welcome Movies</h1>
    <div class="row g-4">
        <div class="col">
            <div class="containerCard">

                @foreach ($movies as $movie)
                    <div class="card" style="width: 18rem; ">
                        <img src="{{$movie->cover}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">{{$movie->title}}</h3>
                            <h5 class="card-title">{{$movie->original_title}}</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Data: {{$movie->date}}</li>
                                <li class="list-group-item">Voto: {{$movie->vote}}</li>
                            </ul>
                            
                            
                        </div>
                    </div>
                @endforeach
                    
            </div> 
        </div>
    </div>

</div>
@endsection