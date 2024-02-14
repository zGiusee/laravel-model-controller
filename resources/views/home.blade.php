<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel-model-controller</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body class="my-bg">
    <div>
        <div class=" m-5 text-danger">
            <h1>Movies DB</h1>
        </div>
        <div class="container py-5">
            <div class="row">
                @foreach ($movies as $movie)
                    <div class="col-3 my-3">
                        <div class="my-card">
                            <div class="m-3">
                                <h4>{{ $movie->title }}</h4>
                                <h5>Original title: {{ $movie->original_title }}</h5>
                            </div>
                            <div class="py-2">
                                <p>Nationality: {{ $movie->nationality }}</p>
                            </div>
                            <div>
                                <p> Release date: {{ $movie->date }}</p>
                                <p>Vote: {{ $movie->vote }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>
