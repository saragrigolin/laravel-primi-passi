<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <h3>Biografia:</h3>
    @if(isset($bio))
    <p> {{ $bio }} </p>
    @endif
</body>
</html>