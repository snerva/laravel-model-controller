@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-white pb-4">Movies</h1>
    <div class="row row-cols-5 g-4">
        @forelse($movies as $movie)
        <div class="col">
            <div class="card text-center">
                <img src="{{$movie->image}}" class="card-img-top" alt="">
                <div class="card-body">
                    <h4 class="card-title">{{$movie->title}}</h4>
                    <hr>
                    <p class="card-text"><strong>Original title: </strong>{{$movie->original_title}}</p>
                    <p class="card-text"><strong>Nationality: </strong>{{$movie->nationality}}</p>
                    <p class="card-text"><strong>Date: </strong>{{$movie->date}}</p>
                    <p class="card-text"><strong>Vote: </strong>{{$movie->vote}}</p>
                </div>

            </div>
        </div>
        @empty
        <div class="col">

        </div>
        @endforelse
    </div>
</div>
@endsection