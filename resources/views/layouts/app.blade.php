<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} - @yield('page_name')</title>

    @vite('resources/js/app.js')

</head>

<body>

    @include('layouts.partials.navbar')

    <main>
        <div class="container">
            <h1>@yield('page_name')</h1>
            @yield('main-content')
        </div>
    </main>

    @include('layouts.partials.footer')

</body>

</html>
