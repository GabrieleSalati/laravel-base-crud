<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_TITLE') }}</title>

    @vite('resources/js/app.js')

</head>

<body>
    <div class="container">
        <div class="row">
            @foreach ($tracks as $track)
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $track['title'] }}</h5>
                            <p class="card-text">{{ $track['album'] }}</p>
                            <p class="card-text">{{ $track['author'] }}</p>
                            <p class="card-text">{{ $track['editor'] }}</p>
                            <p class="card-text">{{ $track['length'] }}</p>
                            <img src={{ $track['poster'] }} alt="poster">
                            <a href="{{ route('show', $tracks) }}"> Details </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
</body>

</html>
