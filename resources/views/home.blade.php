<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <ul>
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('contatti')}}">Contatti</a></li>
            <li><a href="{{route('bio')}}">Bio</a></li>
        </ul>
    </header>
    <h2>Hello World</h2>
    <h3>Ciao, mi chiamo {{ $name }} {{ $lastname }}</h3>
    <h4>Caratteristiche:</h4>
    @if(isset($details))
    <ul>
        @foreach($details as $detail)
        <li>{{ $detail }}</li>
        @endforeach
    </ul>
    @endif
</body>
</html>