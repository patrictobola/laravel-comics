@php 
$main_links = config('header_links'); 
$dc_links = config('footer_main_links'); 

@endphp
<footer>
    <div id="background">
        <div class="container">
            <div class="list-container">
                <div class="list-item">
                    <h2>DC COMICS</h2>
                    <ul>
                        @foreach ($main_links as $link)
                            <li><a href="{{ $link['path']}}">{{ $link['section']}}</a></li>
                        @endforeach
                    </ul>
                    <h2>SHOP</h2>
                    <ul>
                        <li><a href="#">Shop DC</a></li>
                        <li><a href="#">Shop DC collectibles</a></li>
                    </ul>
                </div>
                <div class="list-item">
                    <h2>DC</h2>
                    <ul>
                        @foreach ($dc_links as $link)
                            <li><a href="{{ $link['path']}}">{{ $link['section']}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="list-item">
                    <h2>SITES</h2>
                    <ul>
                        <li><a href="#">DC</a></li>
                        <li><a href="#">MAD Magazine</a></li>
                        <li><a href="#">DC Kids</a></li>
                        <li><a href="#">DC Universe</a></li>
                        <li><a href="#">DC Power Visa</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
