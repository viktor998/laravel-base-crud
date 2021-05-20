<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @foreach($comics as $comic)
        <a href="{{route('comics.show', ['comic'=>$comic->id])}}">
            <div class="card">
                <img src="{{$comic->thumb}}" alt="">
                <h2>{{$comic->series}}</h2>
            </div>
        </a>
    @endforeach
</body>
</html>