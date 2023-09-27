<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies-giuri</title>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <h1 class="text-center mb-5">Movie Cards</h1>

    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title text-danger">Titolo: {{ $movie->title }}</h5>
                            <h6 class="card-text">Titolo Originale: {{ $movie->original_title }}</h6>
                            <h6 class="card-text">Nazionalità: {{ $movie->nationality }}</h6>
                            <h6 class="card-text">Data di uscita: {{ $movie->date }}</h6>
                            <h6 class="card-text">Voto: {{ $movie->vote }}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>