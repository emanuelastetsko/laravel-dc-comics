<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel DC Comics</title>
        @vite('resources/js/app.js')
    </head>
    <body>
   
        <main>
            @yield('content')
        </main>

        <script src="/js/scripts.js"></script>
    </body>
</html>