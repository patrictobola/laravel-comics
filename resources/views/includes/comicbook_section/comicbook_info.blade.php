<div class="bgc">
    <div class="container comicbook-info">
        <!-- Tag  -->
        <div class="tag">
            <figure class="bg-white"><img src="{{ $comic['thumb'] ? $comic['thumb'] : asset('images/no_image.png') }}"
                    alt="{{ $comic['title'] }}"></figure>
        </div>
        {{-- product description --}}
        <div class="wrapper">
            <div class="product-container">
                <h1>{{ $comic['title'] }}</h1>
                {{-- Availabilty section --}}
                <div class="availability">
                    <div class="status">
                        <span>U.S. Price: {{ $comic['price'] }}</span>
                        <span>Available</span>
                    </div>
                    <div class="status-check">
                        <a href="#">Check Availabilty</a>
                    </div>
                </div>
                {{-- Description  --}}
                <p>{{ $comic['description'] }}</p>
            </div>
            <div class="adv">
                <figure><img src="{{ Vite::asset('resources/images/adv.jpg') }}"
                        alt="ADV image che se ci clicco da ispeziona funziona ma altrimenti non va. Ps. ho provate altre immagini nel path e funzionano">
                </figure>
            </div>
        </div>

        {{-- Change comicbook arrow  --}}
        @isset($next)
            <div class="arrow-right"><a href="{{ route('products-info', $next) }}">Right</a></div>
        @endisset
        @isset($prev)
            <div class="arrow-left"><a href="{{ route('products-info', $prev) }}">Left</a></div>
        @endisset

    </div>
</div>
{{-- product details  --}}
<div class="bgc-details">
    <div class="container">
        <div class="details text-black">
            <div class="talent">
                <h2>Talent</h2>
                <div class="art">
                    <div class="title">Art by:</div>
                    <div>
                        <span href="#">{{ $comic->artists }}</span>
                    </div>
                </div>
                <div class="art">
                    <div class="title">Written by:</div>
                    <div>
                        <span href="#">{{ $comic->writers }}</span>

                    </div>
                </div>
            </div>
            <div class="specs">
                <h2>Specs</h2>
                <div class="art">
                    <div class="title">Series:</div>
                    <div>
                        <a href="#">{{ $comic['series'] }}</a>
                    </div>
                </div>
                <div class="art">
                    <div class="title">U.S. Price:</div>
                    <div>
                        <span>{{ $comic['price'] }}</span>
                    </div>
                </div>
                <div class="art">
                    <div class="title">On Sale Date:</div>
                    <div>
                        <span>{{ $comic['sale_date'] }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
