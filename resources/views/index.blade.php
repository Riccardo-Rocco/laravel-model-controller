

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista dei Film</title>
</head>
<body>

    <h1>Lista dei Film</h1>

    @foreach($movies as $movie)
        <div class="card">
            <h2>{{ $movie->title }}</h2>
            <p><strong>titolo originale:</strong> {{$movie->original_title }}</p>
            <p><strong>Data di Uscita:</strong> {{ $movie->date }}</p>
            <p><strong>Voto:</strong> {{ $movie->vote }}</p>
            <
        </div>
    @endforeach

</body>
</html>
