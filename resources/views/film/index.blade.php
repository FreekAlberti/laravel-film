<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach ($films as $film)
        <li>
            <h2>Title: {{$film->title}}</h2>
            <img style="height: 100px; width: 100px;" src="{{$film->cover}}" alt="{{$film->title}}">
            <h3>Producer: {{$film->producer->lastname}} {{$film->producer->name}}</h3>
        </li>
        @endforeach
    </ul>
</body>
</html>