@extends('layouts.app')

@section('content')
<h1>Movies</h1>
<div class="container">
    <div class="row row-cols-5 g-4">
        @forelse($movies as $movie)
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$movie->title}}</h5>
                    <p class="card-text"><strong>Original title:</strong>{{$movie->original_title}}</p>
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