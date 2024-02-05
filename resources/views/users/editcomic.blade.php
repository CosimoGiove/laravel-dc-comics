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
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <a href="{{ route('comics.index') }}">Torna alla lista dei fumetti</a>

        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <div class="text-center">
                    titolo:
                    {{ $comic['titolo'] }}
                    <div>
                        effetua le modifiche
                    </div>
                </div>

                <label for="titolo" class="form-label">
                    titolo :
                </label>
                <input type="text" class="form-control" id="titolo" aria-describedby="emailHelp" id="titolo"
                    value="{{ old('titolo', $comic['titolo']) }}" name="titolo">

                <label for="immagine" class="form-label">
                    immagine :
                </label>
                <input type="text" class="form-control" id="immagine" aria-describedby="emailHelp" id="immagine"
                    value="{{ old('immagine', $comic['immagine']) }}" name="immagine">

                <label for="prezzo" class="form-label">
                    prezzo:
                </label>
                <input type="text" class="form-control" id="prezzo" aria-describedby="emailHelp" id="prezzo"
                    value="{{ old('prezzo', $comic['prezzo']) }}" name="prezzo">

                <label for="serie" class="form-label">
                    serie:
                </label>
                <input type="text" class="form-control" id="serie" aria-describedby="emailHelp" id="serie"
                    value="{{ old('serie', $comic['serie']) }}" name="serie">

                <label for="data_uscita" class="form-label">
                    data di uscita:
                </label>
                <input type="text" class="form-control" id="data_uscita" aria-describedby="emailHelp"
                    id="data_uscita" value="{{ old('data_uscita', $comic['data_uscita']) }}" name="data_uscita">

                <label for="tipo" class="form-label">
                    tipo:
                </label>
                <input type="text" class="form-control" id="tipo" aria-describedby="emailHelp" id="tipo"
                    value="{{ old('tipo', $comic['tipo']) }}" name="tipo">
                <label for="descrizione" class="form-label">
                    descrizione:
                </label>
                <input type="text" class="form-control" id="descrizione" aria-describedby="emailHelp"
                    value="{{ old('descrizione', $comic['descrizione']) }}" name="descrizione">
            </div>
            <button type="submit">effetua modifica</button>
        </form>
    </div>
</body>

</html>
