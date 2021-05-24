@extends('layouts.app')


@section('main')

<div class="form-container">

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif


<form class='create' action="{{route('comics.store')}}" method="post">
    @csrf
    @method('POST')
    <input type="text" name="title" id="" placeholder='title'>
    <input type="text" name="description" id="" placeholder='description'>
    <input type="text" name="thumb" id="" placeholder='thumb'>
    <input type="number" name="price" id="" placeholder='price'>
    <input type="text" name="series" id="" placeholder='series'>
    <input type="date" name="sale_date" id="" placeholder='sale_date'>
    <input type="text" name="type" id="" placeholder='type'>
    <input type="submit" value="ADD">
</form>
</div>

@endsection