@php $header_links = config('header_links'); @endphp

<header>
    <nav>
        <div id="navbar" class="container">

            <div class="logo">
                <a href="{{ route('home')}}"><img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="DC logo"></a>
            </div>
            <div class="links">
                <ul>
                    @foreach ($header_links as $link)
                        <li><a href="{{ $link['path']}}">{{ strtoupper($link['section'])}}</a></li>
                    @endforeach
                </ul>

            </div>
        </div>
    </nav>
</header>
