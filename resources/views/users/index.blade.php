<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container text-center">
        <h1 class="text-center">lista di fumetti</h1>
        <a href="{{ route('comics.create') }}">Crea un nuovo fumetto</a>
        <ul>
            @foreach ($comics as $comic)
                <li>
                    {{ $comic['titolo'] }}
                    <div>
                        <a href="{{ route('comics.show', $comic) }}" alt="titolo">clicca qui per vedere le
                            informazioni</a>
                    </div>
                    <div>
                        <a href="{{ route('comics.edit', $comic) }}">
                            modifica
                        </a>
                        <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">cancella</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</body>

</html>
