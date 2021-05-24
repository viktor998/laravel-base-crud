@extends('layouts.app')

@section('main')
    <div id='options' class="comics">
        <form v-if='clicked' class='delete' :action="`http://localhost:8000/comics/${comic_id}`" method="post">
            <p>Confirm to delete the comic</p>
            @csrf
            @method('DELETE')
            <div class="buttons">
                <input class='red' type="submit" value="Confirm">
                <input class='green' type="button" value="Cancell" @click='(comic_id = "", clicked = false)'>
            </div>
        </form>
        @foreach($comics as $comic)
            <div class="img_title">
                <div class="comics-details">
                    <img src="{{$comic->thumb}}" alt="">
                    
                    <div  class="options">
                        <a class='link-comic' href="{{route('comics.show', ['comic'=>$comic->id])}}">
                            <span>view</span>
                        </a>
                        <a class='edit' href="{{route('comics.edit', ['comic'=>$comic->id])}}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <!-- <a class='delete' href="{{route('comics.destroy', ['comic'=>$comic->id])}}">
                            <i class="fas fa-trash"></i>
                        </a> -->
                        <div class="remove">
                            <i  class="fas fa-trash" @click = "(clicked= true, comic_id= {{$comic->id}})"></i>
                        </div>
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