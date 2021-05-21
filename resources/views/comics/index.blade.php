@extends('layouts.app')

@section('main')
    <div class="comics">
        @foreach($comics as $comic)
            <div class="img_title">
                <div class="comics-details">
                    <img src="{{$comic->thumb}}" alt="">
                    
                    <div class="options">
                        <a class='link-comic' href="{{route('comics.show', ['comic'=>$comic->id])}}">
                            <span>view</span>
                        </a>
                        <a class='edit' href="{{route('comics.edit', ['comic'=>$comic->id])}}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <!-- <a class='delete' href="{{route('comics.destroy', ['comic'=>$comic->id])}}">
                            <i class="fas fa-trash"></i>
                        </a> -->

                        <form action="{{route('comics.destroy', ['comic'=>$comic->id])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit"><i class="fas fa-trash"></i></button>
                        </form>
                    </div>
                    
                </div>
                <h2>{{$comic->series}}</h2>
            </div>
        @endforeach
        <div class="add-comic">
            <a href="{{route('comics.create')}}"> + </a>
        </div>
    </div>
@endsection