<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fumetti</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <script src="{{ asset('js/app.js')}}" defer></script>
</head>
<body>
    @include('partials.header')
    <div>
        <main class="d-flex aligns-items-center justify-content-center">
            @yield('content')
        </main>
    </div>
</body>
</html>
