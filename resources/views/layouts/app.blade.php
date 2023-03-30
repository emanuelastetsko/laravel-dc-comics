<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel DC Comics</title>
        @vite('resources/js/app.js')
    </head>
    <body>
   
        <header>
            <div class="row">
                <div class="col text-center mt-5">
   
                    Header
   
                </div>
            </div>
        </header>
   
        <main>
            @yield('content')
        </main>
   
        <footer>
            <div class="row">
                <div class="col text-center">
   
                    Footer
   
                </div>
            </div>
        </footer>

        <script src="/js/scripts.js"></script>
    </body>
</html>