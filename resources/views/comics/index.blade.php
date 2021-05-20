@extends('layouts.app')

@section('main')
    <div class="comics">
        @foreach($comics as $comic)
            <a href="{{route('comics.show', ['comic'=>$comic->id])}}">
                <div class="card">
                    <img src="{{$comic->thumb}}" alt="">
                    <h2>{{$comic->series}}</h2>
                </div>
            </a>
        @endforeach
    </div>
@endsection