<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comics</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    @vite('resources/scss/_main.scss')
    @vite('resources/scss/_generics.scss')
    @vite('resources/scss/_header.scss')
    @vite('resources/scss/_footer.scss')
    @vite('resources/scss/_footer_links.scss')
</head>

<body>
    {{-- Header  --}}
    @include('includes.header')

    {{-- Main  --}}
    @include('includes.main')

    {{-- Footer  --}}
    @include('includes.footer')


</body>

</html>
