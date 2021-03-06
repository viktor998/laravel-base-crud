
@extends('layouts.app')

@section('main')
    <div class="comic">
        <img src="{{$comic->thumb}}" alt="">
        <h1>{{$comic->title}}</h1>
        <div class="text">
            <p>{{$comic->description}}</p>
            <div class="details">
                <span class='price'>${{$comic->price}}</span>
                <span>{{$comic->series}}</span>
                <span>{{$comic->sale_date}}</span>
                <span>{{$comic->type}}</span>
            </div>
        </div>
    </div>
@endsection
