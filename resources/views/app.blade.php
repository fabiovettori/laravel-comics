<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="DCComics.com: Welcome to the Official Site for DC. DC is home to the &quot;World&#039;s Greatest Super Heroes,” including SUPERMAN, BATMAN, WONDER WOMAN, GREEN LANTERN, THE FLASH, AQUAMAN and more." />

        {{-- FONTS --}}
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300;700&family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

        {{-- CSS --}}
        <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">

        {{-- JS --}}
        <script src=" {{ asset('js/app.js') }} " charset="utf-8"></script>
    </head>

    <body>
        @include('layouts.header')

        <main>
            @yield('content')
        </main>
        
        @include('layouts.footer')
    </body>

</html>
