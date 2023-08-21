<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    @vite('resources/js/app.js')
    {{-- @vite('resources/scss/_header.scss') --}}
</head>

<body>
    {{-- Header  --}}
    @include('includes.header')

    <main>
        @include('includes.jumbotron')
        @yield('main-content')
    </main>


</body>

</html>
