
@extends('layouts.template')

@section('content')
    <section class="container">
        <div class="cards-container">
            @foreach ($movies as $movie)
    
                <div class="card">
                    <h4>Title: {{ $movie->title }} </h4>
                    <div>OriginalTitle: {{ $movie->original_title }} </div>
                    <div>Nationality: {{ $movie->nationality }} </div>
                    <div>Date: {{ $movie->date }} </div>
                    <div>Rating: {{ $movie->vote }} </div>
                </div>
    
            @endforeach
        </div>
    </section>
@endsection