<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>Document</title>

</head>

<body>
    <h2>modifiche effetuate</h2>
    <a href="{{ route('comics.index') }}">Torna alla lista dei fumetti</a>
    <div>
        titolo:
        {{ $comic['titolo'] }}
    </div>
    <div>
        immagine :
        {{ $comic['immagine'] }}
    </div>
    <div>
        descrizione :
        {{ $comic['descrizione'] }}
    </div>
    <div>
        prezzo :
        {{ $comic['prezzo'] }}
    </div>
    <div>
        data di uscita :
        {{ $comic['data_uscita'] }}
    </div>
    <div>
        tipo:
        {{ $comic['tipo'] }}
    </div>
    <div>
        serie :
        {{ $comic['serie'] }}
    </div>


</body>

</html>
