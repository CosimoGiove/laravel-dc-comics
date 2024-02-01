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
        @foreach ($comics as $comic)
            <li>
                {{ $comic['titolo'] }}
                <div>
                    <a href="{{ route('users.show', $comic) }}" alt="Pasta">clicca qui per vedere le informazioni</a>
                </div>
            </li>
        @endforeach
    </ul>
</body>
</html>


