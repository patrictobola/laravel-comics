<header>
    <nav>
        <div id="navbar" class="container">

            <div class="logo">
                <a href=""><img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt=""></a>
            </div>
            <div class="links">
                <ul>
                    @foreach ($header_links as $link)
                        <li><a href="{{ $link['path']}}">{{ $link['section']}}</a></li>
                    @endforeach
                </ul>

            </div>
        </div>
    </nav>
</header>
