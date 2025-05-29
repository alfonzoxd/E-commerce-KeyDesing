<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'KeyDesign')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @yield('head')

    <link href="https://fonts.googleapis.com/css2?family=Saira+Semi+Condensed&display=swap" rel="stylesheet">
    <style>.font-tech { font-family: 'Saira Semi Condensed', sans-serif; }</style>

</head>
<body class="bg-black text-white">

    @include('partials.header')

    @yield('content')

    @yield('scripts')
</body>
</html>
