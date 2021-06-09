
@extends('layouts.template')

@section('content')
    <section>
        @foreach ($movies as $movie)
            {{-- debug --}}
            <div> {{ $movie->title }} </div>
            <div> {{ $movie->original_title }} </div>
            <div> {{ $movie->nationality }} </div>
            <div> {{ $movie->date }} </div>
            <div> {{ $movie->vote }} </div>
        @endforeach
    </section>
@endsection